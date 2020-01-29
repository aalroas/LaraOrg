<?php

namespace App\Repositories\Backend\Auth;

use App\Events\Backend\Auth\User\UserConfirmed;
use App\Events\Backend\Auth\User\UserCreated;
use App\Events\Backend\Auth\User\UserDeactivated;
use App\Events\Backend\Auth\User\UserPasswordChanged;
use App\Events\Backend\Auth\User\UserPermanentlyDeleted;
use App\Events\Backend\Auth\User\UserReactivated;
use App\Events\Backend\Auth\User\UserRestored;
use App\Events\Backend\Auth\User\UserUnconfirmed;
use App\Events\Backend\Auth\User\UserUpdated;
use App\Exceptions\GeneralException;
use App\Models\Auth\User;
use App\Notifications\Backend\Auth\UserAccountActive;
use App\Notifications\Frontend\Auth\UserNeedsConfirmation;
use App\Repositories\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository
{
    /**
     * UserRepository constructor.
     *
     * @param  User  $model
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getUnconfirmedCount() : int
    {
        return $this->model
            ->where('confirmed', false)
            ->count();
    }

    /**
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return mixed
     */
    public function getActivePaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc') : LengthAwarePaginator
    {
        return $this->model
            ->with('roles', 'permissions', 'providers')
            ->active()
            ->orderBy($orderBy, $sort)
            ->paginate($paged);
    }

    /**
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return LengthAwarePaginator
     */
    public function getInactivePaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc') : LengthAwarePaginator
    {
        return $this->model
            ->with('roles', 'permissions', 'providers')
            ->active(false)
            ->orderBy($orderBy, $sort)
            ->paginate($paged);
    }

    /**
     * @param int    $paged
     * @param string $orderBy
     * @param string $sort
     *
     * @return LengthAwarePaginator
     */
    public function getDeletedPaginated($paged = 25, $orderBy = 'created_at', $sort = 'desc') : LengthAwarePaginator
    {
        return $this->model
            ->with('roles', 'permissions', 'providers')
            ->onlyTrashed()
            ->orderBy($orderBy, $sort)
            ->paginate($paged);
    }

    /**
     * @param array $data
     *
     * @throws \Exception
     * @throws \Throwable
     * @return User
     */
    public function create(array $data) : User
    {
        return DB::transaction(function () use ($data) {
            $user = $this->model::create([


                'full_name_ar' => $data['full_name_ar'],
                'full_name_en' => $data['full_name_en'],
                'full_name_tr' => $data['full_name_en'],


                'phone' => $data['phone'],

                'gender' => $data['gender'],

                'company_name_en' => $data['company_name_en'],
                'company_name_ar' => $data['company_name_ar'],
                'company_name_tr' => $data['company_name_tr'],



                'year_founded' => $data['year_founded'],
                'country' => $data['country'],

                'main_location_ar' => $data['main_location_ar'],

                'main_location_en' => $data['main_location_en'],

                'main_location_tr' => $data['main_location_tr'],



                'agency' => $data['agency'],
                'number_of_employee' => $data['number_of_employee'],

                'main_address_ar' => $data['main_address_ar'],

                'main_address_en' => $data['main_address_en'],

                'main_address_tr' => $data['main_address_tr'],




                'branches_addresses' => $data['branches_addresses'],

                'main_product' => $data['main_product'],

                'brief_description_ar' => $data['brief_description_ar'],

                'brief_description_en' => $data['brief_description_en'],



                'partner_companies' => $data['partner_companies'],

                'instagram_url' => $data['instagram_url'],

                'linkedin_url' => $data['linkedin_url'],

                'facebook_url' => $data['facebook_url'],
                'twitter_url' => $data['twitter_url'],




                'email' => $data['email'],
                'password' => $data['password'],
                'active' => isset($data['active']) && $data['active'] === '1',
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'confirmed' => isset($data['confirmed']) && $data['confirmed'] === '1',
            ]);

            // See if adding any additional permissions
            if (! isset($data['permissions']) || ! count($data['permissions'])) {
                $data['permissions'] = [];
            }

            if ($user) {
                // User must have at least one role
                if (! count($data['roles'])) {
                    throw new GeneralException(__('exceptions.backend.access.users.role_needed_create'));
                }

                // Add selected roles/permissions
                $user->syncRoles($data['roles']);
                $user->syncPermissions($data['permissions']);

                //Send confirmation email if requested and account approval is off
                if ($user->confirmed === false && isset($data['confirmation_email']) && ! config('access.users.requires_approval')) {
                    $user->notify(new UserNeedsConfirmation($user->confirmation_code));
                }

                event(new UserCreated($user));

                return $user;
            }

            throw new GeneralException(__('exceptions.backend.access.users.create_error'));
        });
    }



    /**
     * @param User  $user
     * @param array $data
     * @param bool|UploadedFile  $image_profile
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return User
     */
    public function updatePersonalInfo(User $user, array $data, $image_profile = false) : User {


        $avatar_type = "storage";

        // Upload profile image if necessary
        if ($image_profile) {
            if ($image_profile !== $user->profile_image) {
                Storage::disk('public')->delete($user->profile_image);
            }
            $user->profile_image = $image_profile->store('/members/profiles', 'public');
            // $updatedx = $user->save();
        } else {
            // No image being passed
            if ($avatar_type === 'storage') {
                // If there is no existing image
                if ($user->image_profile === '') {
                    throw new GeneralException('You must supply a profile image.');
                }
            } else {
                // If there is a current image, and they are not using it anymore, get rid of it
                if ($user->profile_image !== '') {
                    Storage::disk('public')->delete($user->profile_image);
                }
                $user->profile_image = null;
            }
        }


        $this->checkUserByEmail($user, $data['email']);
        // See if adding any additional permissions
        if (! isset($data['permissions']) || ! count($data['permissions'])) {
            $data['permissions'] = [];
        }

        return DB::transaction(function () use ($user, $data, $image_profile) {
            if ($user->update([
                'full_name_ar' => $data['full_name_ar'],
                'full_name_en' => $data['full_name_en'],
                'full_name_tr' => $data['full_name_en'],
                'phone' => $data['phone'],
                'gender' => $data['gender'],
                'country' => $data['country'],
                'email' => $data['email'],
                'avatar_type' => 'storage',
                // 'profile_image' => $image_profile->store('/members/profiles', 'public'),
            ]))

            {
                // Add selected roles/permissions
                $user->syncRoles($data['roles']);
                $user->syncPermissions($data['permissions']);

                event(new UserUpdated($user));
                return $user;
            }

            throw new GeneralException(__('exceptions.backend.access.users.update_error'));
        }
    );






        if ($user->canChangeEmail()) {
            //Address is not current address so they need to reconfirm
            if ($user->email !== $data['email']) {
                //Emails have to be unique
                if ($this->getByColumn($data['email'], 'email')) {
                    throw new GeneralException(__('exceptions.frontend.auth.email_taken'));
                }

                // Force the user to re-verify his email address if config is set
                if (config('access.users.confirm_email')) {
                    $user->confirmation_code = md5(uniqid(mt_rand(), true));
                    $user->confirmed = false;
                    $user->notify(new UserNeedsConfirmation($user->confirmation_code));
                }
                $user->email = $data['email'];
                $updated = $user->save();

                // Send the new confirmation e-mail

                return [
                    'success' => $updated,
                    'email_changed' => true,
                ];
            }
        }
    }




















     /**
     * @param User  $user
     * @param array $data
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return User
     */
    public function updateCompanyInfo(User $user, array $data, $image_logo = fales) : User
    {


        $avatar_type = "storage";

        // Upload profile image if necessary
        if ($image_logo) {
            if ($image_logo !== $user->company_logo) {
                Storage::disk('public')->delete($user->company_logo);
            }
            $user->company_logo = $image_logo->store('/members/compnies/logos/', 'public');
            // $updatedx = $user->save();
        } else {
            // No image being passed
            if ($avatar_type === 'storage') {
                // If there is no existing image
                if ($user->image_logo === '') {
                    throw new GeneralException('You must supply a profile image.');
                }
            } else {
                // If there is a current image, and they are not using it anymore, get rid of it
                if ($user->company_logo !== '') {
                    Storage::disk('public')->delete($user->company_logo);
                }
                $user->company_logo = null;
            }
        }



        return DB::transaction(function () use ($user, $data, $image_logo) {
            if ($user->update([



                'company_name_en' => $data['company_name_en'],
                'company_name_ar' => $data['company_name_ar'],
                'company_name_tr' => $data['company_name_tr'],



                'year_founded' => $data['year_founded'],

                'main_location_ar' => $data['main_location_ar'],

                'main_location_en' => $data['main_location_en'],

                'main_location_tr' => $data['main_location_tr'],



                'agency' => $data['agency'],
                'number_of_employee' => $data['number_of_employee'],

                'main_address_ar' => $data['main_address_ar'],

                'main_address_en' => $data['main_address_en'],

                'main_address_tr' => $data['main_address_tr'],




                'branches_addresses' => $data['branches_addresses'],

                'main_product' => $data['main_product'],

                'brief_description_ar' => $data['brief_description_ar'],

                'brief_description_en' => $data['brief_description_en'],



                'partner_companies' => $data['partner_companies'],

               'avatar_type' => 'storage',

            ]))


          $avatar_type = 'storage';

        // Upload profile image if necessary
        if ($image_logo) {
            if ($image_logo != $user->company_logo) {
                Storage::disk('public')->delete($user->company_logo);
            }
            $user->company_logo = $image_logo->store('/members/companis/logos', 'public');
        } else {
            // No image being passed
            if ($avatar_type === 'storage') {
                // If there is no existing image
                if ($user->image_logo === '') {
                    throw new GeneralException('You must supply a profile image.');
                }
            } else {
                // If there is a current image, and they are not using it anymore, get rid of it
                if ($user->company_logo !== '') {
                    Storage::disk('public')->delete($user->company_logo);
                }

                $user->company_logo = null;
            }
        }

          {

                event(new UserUpdated($user));
                $user->sectors()->sync($data['sectors']);
                $user->fields()->sync($data['fields']);

                return $user;
            }

            throw new GeneralException(__('exceptions.backend.access.users.update_error'));
        });
    }




    /**
     * @param User  $user
     * @param array $data
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return User
     */
    public function updateContactInfo(User $user, array $data): User
    {

        return DB::transaction(function () use ($user, $data) {
            if ($user->update([

                'instagram_url' => $data['instagram_url'],

                'linkedin_url' => $data['linkedin_url'],

                'facebook_url' => $data['facebook_url'],
                'twitter_url' => $data['twitter_url'],

            ])) {
                event(new UserUpdated($user));

                return $user;
            }

            throw new GeneralException(__('exceptions.backend.access.users.update_error'));
        });
    }







    /**
     * @param User $user
     * @param      $input
     *
     * @throws GeneralException
     * @return User
     */
    public function updatePassword(User $user, $input) : User
    {
        if ($user->update(['password' => $input['password']])) {
            event(new UserPasswordChanged($user));

            return $user;
        }

        throw new GeneralException(__('exceptions.backend.access.users.update_password_error'));
    }

    /**
     * @param User $user
     * @param      $status
     *
     * @throws GeneralException
     * @return User
     */
    public function mark(User $user, $status) : User
    {
        if ($status === 0 && auth()->id() === $user->id) {
            throw new GeneralException(__('exceptions.backend.access.users.cant_deactivate_self'));
        }

        $user->active = $status;

        switch ($status) {
            case 0:
                event(new UserDeactivated($user));
            break;
            case 1:
                event(new UserReactivated($user));
            break;
        }

        if ($user->save()) {
            return $user;
        }

        throw new GeneralException(__('exceptions.backend.access.users.mark_error'));
    }

    /**
     * @param User $user
     *
     * @throws GeneralException
     * @return User
     */
    public function confirm(User $user) : User
    {
        if ($user->confirmed) {
            throw new GeneralException(__('exceptions.backend.access.users.already_confirmed'));
        }

        $user->confirmed = true;
        $confirmed = $user->save();

        if ($confirmed) {
            event(new UserConfirmed($user));

            // Let user know their account was approved
            if (config('access.users.requires_approval')) {
                $user->notify(new UserAccountActive);
            }

            return $user;
        }

        throw new GeneralException(__('exceptions.backend.access.users.cant_confirm'));
    }

    /**
     * @param User $user
     *
     * @throws GeneralException
     * @return User
     */
    public function unconfirm(User $user) : User
    {
        if (! $user->confirmed) {
            throw new GeneralException(__('exceptions.backend.access.users.not_confirmed'));
        }

        if ($user->id === 1) {
            // Cant un-confirm admin
            throw new GeneralException(__('exceptions.backend.access.users.cant_unconfirm_admin'));
        }

        if ($user->id === auth()->id()) {
            // Cant un-confirm self
            throw new GeneralException(__('exceptions.backend.access.users.cant_unconfirm_self'));
        }

        $user->confirmed = false;
        $unconfirmed = $user->save();

        if ($unconfirmed) {
            event(new UserUnconfirmed($user));

            return $user;
        }

        throw new GeneralException(__('exceptions.backend.access.users.cant_unconfirm'));
    }

    /**
     * @param User $user
     *
     * @throws GeneralException
     * @throws \Exception
     * @throws \Throwable
     * @return User
     */
    public function forceDelete(User $user) : User
    {
        if ($user->deleted_at === null) {
            throw new GeneralException(__('exceptions.backend.access.users.delete_first'));
        }

        return DB::transaction(function () use ($user) {
            // Delete associated relationships
            $user->passwordHistories()->delete();
            $user->providers()->delete();

            if ($user->forceDelete()) {
                event(new UserPermanentlyDeleted($user));

                return $user;
            }

            throw new GeneralException(__('exceptions.backend.access.users.delete_error'));
        });
    }

    /**
     * @param User $user
     *
     * @throws GeneralException
     * @return User
     */
    public function restore(User $user) : User
    {
        if ($user->deleted_at === null) {
            throw new GeneralException(__('exceptions.backend.access.users.cant_restore'));
        }

        if ($user->restore()) {
            event(new UserRestored($user));

            return $user;
        }

        throw new GeneralException(__('exceptions.backend.access.users.restore_error'));
    }

    /**
     * @param User $user
     * @param      $email
     *
     * @throws GeneralException
     */
    protected function checkUserByEmail(User $user, $email)
    {
        // Figure out if email is not the same and check to see if email exists
        if ($user->email !== $email && $this->model->where('email', '=', $email)->first()) {
            throw new GeneralException(trans('exceptions.backend.access.users.email_error'));
        }
    }
}
