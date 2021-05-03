<?php

namespace App\Repositories\Frontend\Auth;

use App\Models\Auth\User;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use App\Models\Auth\SocialAccount;
use Illuminate\Support\Facades\DB;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Events\Frontend\Auth\UserConfirmed;
use App\Events\Frontend\Auth\UserProviderRegistered;
use App\Notifications\Frontend\Auth\UserNeedsConfirmation;
use App\Mail\Frontend\AdminNotifiction\AdminNotifiction;
use Illuminate\Support\Facades\Mail;



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
     * @param $token
     *
     * @return bool|\Illuminate\Database\Eloquent\Model
     */
    public function findByPasswordResetToken($token)
    {
        foreach (DB::table(config('auth.passwords.users.table'))->get() as $row) {
            if (password_verify($token, $row->token)) {
                return $this->getByColumn($row->email, 'email');
            }
        }

        return false;
    }

    /**
     * @param $uuid
     *
     * @throws GeneralException
     * @return mixed
     */
    public function findByUuid($uuid)
    {
        $user = $this->model
            ->uuid($uuid)
            ->first();

        if ($user instanceof $this->model) {
            return $user;
        }

        throw new GeneralException(__('exceptions.backend.access.users.not_found'));
    }

    /**
     * @param $code
     *
     * @throws GeneralException
     * @return mixed
     */
    public function findByConfirmationCode($code)
    {
        $user = $this->model
            ->where('confirmation_code', $code)
            ->first();

        if ($user instanceof $this->model) {
            return $user;
        }

        throw new GeneralException(__('exceptions.backend.access.users.not_found'));
    }

    /**
     * @param array $data
     *
     * @throws \Exception
     * @throws \Throwable
     * @return \Illuminate\Database\Eloquent\Model|mixed
     */
    public function create(array $data)
    {

        return DB::transaction(function () use ($data) {

            $user = $this->model::create([
                'profile_image' => $data['profile_image']->store('/members/profiles', 'public'),
                'company_logo' => $data['company_logo']->store('/members/companies/logos', 'public'),

                'full_name_ar' => $data['full_name_ar'],
                'full_name_en' => $data['full_name_en'],
                'full_name_tr' => $data['full_name_en'],

                'slug' => Str::slug($data['full_name_en']),

                'sicil_no' => $data['sicil_no'],

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
                'brief_description_tr' => $data['brief_description_en'],



                'partner_companies' => $data['partner_companies'],

                'instagram_url' => $data['instagram_url'],

                'linkedin_url' => $data['linkedin_url'],



                'avatar_type' => 'storage',

                'facebook_url' => $data['facebook_url'],
                'twitter_url' => $data['twitter_url'],
                'email' => $data['email'],
                'password' => $data['password'],
                'confirmation_code' => md5(uniqid(mt_rand(), true)),
                'active' => false,

                // If users require approval or needs to confirm email
                'confirmed' => !(config('access.users.requires_approval') || config('access.users.confirm_email')),
            ]);



            if ($user) {
                // Add the default site role to the new user
                $user->assignRole(config('access.users.default_role'));
            }

            /*
             * If users have to confirm their email and this is not a social account,
             * and the account does not require admin approval
             * send the confirmation email
             *
             * If this is a social account they are confirmed through the social provider by default
             */
            if (config('access.users.confirm_email')) {
                // Pretty much only if account approval is off, confirm email is on, and this isn't a social account.
                $user->notify(new UserNeedsConfirmation($user->confirmation_code));
            }
            // send notifiction for admin
            Mail::send(new AdminNotifiction($user));
            // Return the user object
            return $user;

        });



    }

    /**
     * @param       $id
     * @param array $input
     * @param bool|UploadedFile  $image_profile
     *
     * @throws GeneralException
     * @return array|bool
     */
    public function updatePersonalInfo($id, array $input, $image_profile = false)
    {
        $user = $this->getById($id);

        $user->full_name_ar = $input['full_name_ar'];
        $user->full_name_en = $input['full_name_en'];
        $user->full_name_tr = $input['full_name_en'];
        $user->slug = Str::slug($input['full_name_en']);


        $user->phone = $input['phone'];
        $user->gender = $input['gender'];

        $user->country = $input['country'];


        $user->avatar_type = "storage";
        $avatar_type= "storage";

        // Upload profile image if necessary
        if ($image_profile) {
            if($image_profile != $user->profile_image){
                Storage::disk('public')->delete(auth()->user()->profile_image);
            }
            $user->profile_image = $image_profile->store('/members/profiles', 'public');
        } else {
            // No image being passed
            if ($avatar_type === 'storage') {
                // If there is no existing image
                if (auth()->user()->image_profile === '') {
                    throw new GeneralException('You must supply a profile image.');
                }
            } else {
                // If there is a current image, and they are not using it anymore, get rid of it
                if (auth()->user()->profile_image !== '') {
                    Storage::disk('public')->delete(auth()->user()->profile_image);
                }

                $user->profile_image = null;
            }
        }




        if ($user->canChangeEmail()) {
            //Address is not current address so they need to reconfirm
            if ($user->email !== $input['email']) {
                //Emails have to be unique
                if ($this->getByColumn($input['email'], 'email')) {
                    throw new GeneralException(__('exceptions.frontend.auth.email_taken'));
                }

                // Force the user to re-verify his email address if config is set
                if (config('access.users.confirm_email')) {
                    $user->confirmation_code = md5(uniqid(mt_rand(), true));
                    $user->confirmed = false;
                    $user->notify(new UserNeedsConfirmation($user->confirmation_code));
                }
                $user->email = $input['email'];
                $updated = $user->save();

                // Send the new confirmation e-mail

                return [
                    'success' => $updated,
                    'email_changed' => true,
                ];
            }
        }

        return $user->save();
    }









    /**
     * @param       $id
     * @param array $input
     * @param bool|UploadedFile  $image_logo
     *
     * @throws GeneralException
     * @return array|bool
     */
    public function updateCompanyInfo($id, array $input, $image_logo = false)
    {
        $user = $this->getById($id);

        $user->company_name_en = $input['company_name_en'];
        $user->company_name_ar = $input['company_name_ar'];
        $user->company_name_tr = $input['company_name_tr'];


        $user->year_founded = $input['year_founded'];

        $user->main_location_ar = $input['main_location_ar'];
        $user->main_location_en = $input['main_location_en'];
        $user->main_location_tr = $input['main_location_tr'];

        $user->agency = $input['agency'];

        $user->number_of_employee = $input['number_of_employee'];
        $user->main_address_ar = $input['main_address_ar'];
        $user->main_address_en = $input['main_address_en'];

        $user->main_address_tr = $input['main_address_tr'];

        $user->branches_addresses = $input['branches_addresses'];

        $user->main_product = $input['main_product'];

        $user->brief_description_ar = $input['brief_description_ar'];

        $user->brief_description_en = $input['brief_description_en'];
        $user->brief_description_tr = $input['brief_description_en'];

        $user->partner_companies = $input['partner_companies'];

        $user->sicil_no  = $input['sicil_no'];


        $avatar_type = 'storage';

        // Upload profile image if necessary
        if ($image_logo) {
            if ($image_logo != $user->company_logo) {
                Storage::disk('public')->delete(auth()->user()->company_logo);
            }
            $user->company_logo = $image_logo->store('/members/companies/logos', 'public');
        } else {
            // No image being passed
            if ($avatar_type === 'storage') {
                // If there is no existing image
                if (auth()->user()->image_logo === '') {
                    throw new GeneralException('You must supply a profile image.');
                }
            } else {
                // If there is a current image, and they are not using it anymore, get rid of it
                if (auth()->user()->company_logo !== '') {
                    Storage::disk('public')->delete(auth()->user()->company_logo);
                }

                $user->company_logo = null;
            }
        }
        return  $user->save();



    }






    /**
     * @param       $id
     * @param array $input
     *
     * @throws GeneralException
     * @return array|bool
     */
    public function updateContactInfo($id, array $input)
    {
        $user = $this->getById($id);
        $user->facebook_url = $input['facebook_url'];
        $user->instagram_url = $input['instagram_url'];
        $user->linkedin_url = $input['linkedin_url'];
        $user->twitter_url = $input['twitter_url'];
        return  $user->save();
    }




    /**
     * @param      $input
     * @param bool $expired
     *
     * @throws GeneralException
     * @return bool
     */
    public function updatePassword($input, $expired = false)
    {
        $user = $this->getById(auth()->id());

        if (Hash::check($input['old_password'], $user->password)) {
            if ($expired) {
                $user->password_changed_at = now()->toDateTimeString();
            }

            return $user->update(['password' => $input['password']]);
        }

        throw new GeneralException(__('exceptions.frontend.auth.password.change_mismatch'));
    }

    /**
     * @param $code
     *
     * @throws GeneralException
     * @return bool
     */
    public function confirm($code)
    {
        $user = $this->findByConfirmationCode($code);

        if ($user->confirmed === true) {
            throw new GeneralException(__('exceptions.frontend.auth.confirmation.already_confirmed'));
        }

        if ($user->confirmation_code === $code) {
            $user->confirmed = true;

            event(new UserConfirmed($user));

            return $user->save();
        }

        throw new GeneralException(__('exceptions.frontend.auth.confirmation.mismatch'));
    }

    /**
     * @param $data
     * @param $provider
     *
     * @throws GeneralException
     * @return mixed
     */
    public function findOrCreateProvider($data, $provider)
    {
        // User email may not provided.
        $user_email = $data->email ?: "{$data->id}@{$provider}.com";

        // Check to see if there is a user with this email first.
        $user = $this->getByColumn($user_email, 'email');

        /*
         * If the user does not exist create them
         * The true flag indicate that it is a social account
         * Which triggers the script to use some default values in the create method
         */
        if (!$user) {
            // Registration is not enabled
            if (!config('access.registration')) {
                throw new GeneralException(__('exceptions.frontend.auth.registration_disabled'));
            }

            // Get users first name and last name from their full name
            // $nameParts = $this->getNameParts($data->getName());

            $user = $this->model::create([
                // 'name_tr' => $nameParts['name_en'],
                // 'name_en' => $nameParts['name_en'],
                // 'name_ar' => $nameParts['name_ar'],

                'email' => $user_email,
                'active' => false,
                'confirmed' => false,
                'password' => null,
                'avatar_type' => $provider,
            ]);

            if ($user) {
                // Add the default site role to the new user
                $user->assignRole(config('access.users.default_role'));
            }

            // event(new UserProviderRegistered($user));
        }

        // See if the user has logged in with this social account before
        if (!$user->hasProvider($provider)) {
            // Gather the provider data for saving and associate it with the user
            $user->providers()->save(new SocialAccount([
                'provider' => $provider,
                'provider_id' => $data->id,
                'token' => $data->token,
                'avatar' => $data->avatar,
            ]));
        } else {
            // Update the users information, token and avatar can be updated.
            $user->providers()->update([
                'token' => $data->token,
                'avatar' => $data->avatar,
            ]);

            $user->avatar_type = $provider;
            $user->update();
        }

        // Return the user object
        return $user;
    }

    // /**
    //  * @param $fullName
    //  *
    //  * @return array
    //  */
    // protected function getNameParts($fullName)
    // {
    //     $parts = array_values(array_filter(explode(' ', $fullName)));
    //     $size = count($parts);
    //     $result = [];

    //     if (empty($parts)) {
    //         $result['name_ar'] = null;
    //         $result['name_en'] = null;

    //     }

    //     if (!empty($parts) && $size === 1) {
    //         $result['name_ar'] = $parts[0];

    //         $result['name_en'] = null;
    //     }

    //     if (!empty($parts) && $size >= 2) {

    //         $result['name_ar'] = $parts[1];
    //         $result['name_en'] = $parts[1];
    //     }

    //     return $result;
    // }


         // $user->instagram_url = $input['instagram_url'];
        // $user->linkedin_url = $input['linkedin_url'];
        // $user->twitter_url = $input['twitter_url'];
        // $user->facebook_url = $input['facebook_url'];


}
