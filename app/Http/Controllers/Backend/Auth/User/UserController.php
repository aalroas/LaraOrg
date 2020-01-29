<?php

namespace App\Http\Controllers\Backend\Auth\User;

use App\Events\Backend\Auth\User\UserDeleted;
use App\Http\Controllers\Controller;
use App\Http\Requests\Backend\Auth\User\ManageUserRequest;
use App\Http\Requests\Backend\Auth\User\StoreUserRequest;
use App\Http\Requests\Backend\Auth\User\UpdateUserRequest;
use App\Models\Auth\User;
use App\Repositories\Backend\Auth\PermissionRepository;
use App\Repositories\Backend\Auth\RoleRepository;
use App\Repositories\Backend\Auth\UserRepository;
use App\Models\frontend\field;
use App\Models\frontend\sector;
/**
 * Class UserController.
 */
class UserController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * UserController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param ManageUserRequest $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(ManageUserRequest $request)
    {
        return view('backend.auth.user.index')
            ->withUsers($this->userRepository->getActivePaginated(25, 'id', 'asc'));
    }

    /**
     * @param ManageUserRequest    $request
     * @param RoleRepository       $roleRepository
     * @param PermissionRepository $permissionRepository
     *
     * @return mixed
     */
    public function create(ManageUserRequest $request, RoleRepository $roleRepository, PermissionRepository $permissionRepository)
    {
        return view('backend.auth.user.create')
            ->withRoles($roleRepository->with('permissions')->get(['id', 'name']))
            ->withPermissions($permissionRepository->get(['id', 'name']));
    }

    /**
     * @param StoreUserRequest $request
     *
     * @throws \Throwable
     * @return mixed
     */
    public function store(StoreUserRequest $request)
    {
        $this->userRepository->create($request->only(
            'full_name_ar',
            'full_name_en',
            'full_name_tr',
            'phone',
            'gender',
            'company_name_en',
            'company_name_ar',
            'avatar_type',
            'year_founded',
            'country',
            'main_location_ar',
            'main_location_en',
            'main_location_tr',
            'agency',
            'number_of_employee',
            'main_address_ar',
            'main_address_en',
            'main_address_tr',
            'branches_addresses',
            'main_product',
            'brief_description_ar',
            'brief_description_en',
            'partner_companies',
            'instagram_url',
            'linkedin_url',
            'facebook_url',
            'twitter_url',
            'profile_image',
            'company_logo',
            'email',
            'password',
            'active',
            'confirmed',
            'confirmation_email',
            'roles',
            'permissions'
        ));

        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__('alerts.backend.users.created'));
    }

    /**
     * @param ManageUserRequest $request
     * @param User              $user
     *
     * @return mixed
     */
    public function show(ManageUserRequest $request, User $user)
    {
        return view('backend.auth.user.show')
            ->withUser($user);
    }

    /**
     * @param ManageUserRequest    $request
     * @param RoleRepository       $roleRepository
     * @param PermissionRepository $permissionRepository
     * @param User                 $user
     *
     * @return mixed
     */
    public function edit(ManageUserRequest $request, RoleRepository $roleRepository, PermissionRepository $permissionRepository, User $user)
    {

        $fields = field::all();
        $sectors = sector::all();

        return view('backend.auth.user.edit',compact('fields', 'sectors'))
            ->withUser($user)
            ->withRoles($roleRepository->get())
            ->withUserRoles($user->roles->pluck('name')->all())
            ->withPermissions($permissionRepository->get(['id', 'name']))
            ->withUserPermissions($user->permissions->pluck('name')->all());
    }

    /**
     * @param UpdateUserRequest $request
     * @param User              $user

     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     * @return mixed
     */
    public function updatePersonalInfo(UpdateUserRequest $request, User $user)
    {
        $this->userRepository->updatePersonalInfo(
            $user,
            $request->only('full_name_ar', 'full_name_en', 'full_name_tr', 'phone', 'gender', 'country', 'email', 'profile_image','roles','permissions'),
            $request->has('profile_image') ? $request->file('profile_image') : false
        );


        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__('alerts.backend.users.updated'));
    }



    public function updateCompanyInfo(UpdateUserRequest $request, User $user)
    {
        $this->userRepository->updateCompanyInfo(
         $user,
         $request->only('company_name_en','company_name_ar','company_name_tr','sectors','fields','year_founded','main_location_ar','main_location_en','main_location_tr','agency','number_of_employee','main_address_ar','main_address_en','main_address_tr','branches_addresses','main_product','brief_description_ar','brief_description_en','partner_companies','company_logo','avatar_type','main_location_tr'),
         $request->has('company_logo') ? $request->file('company_logo') : false
        );


        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__('alerts.backend.users.updated'));
    }




    public function updateContactInfo(UpdateUserRequest $request, User $user)
    {
        $this->userRepository->updateContactInfo($user,
        $request->only('facebook_url', 'instagram_url', 'linkedin_url', 'twitter_url'),
    );

        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__('alerts.backend.users.updated'));
    }


    /**
     * @param ManageUserRequest $request
     * @param User              $user
     *
     * @throws \Exception
     * @return mixed
     */
    public function destroy(ManageUserRequest $request, User $user)
    {
        $this->userRepository->deleteById($user->id);

        event(new UserDeleted($user));

        return redirect()->route('admin.auth.user.deleted')->withFlashSuccess(__('alerts.backend.users.deleted'));
    }
}
