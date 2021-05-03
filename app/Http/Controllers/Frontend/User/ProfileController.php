<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Frontend\BaseFrontendController;
use App\Http\Requests\Frontend\User\UpdateProfileRequest;
use App\Repositories\Frontend\Auth\UserRepository;
use App\Models\Auth\User;
/**
 * Class ProfileController.
 */
class ProfileController extends BaseFrontendController
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * ProfileController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param UpdateProfileRequest $request
     *
     * @throws \App\Exceptions\GeneralException
     * @return mixed
     */
    public function updatePersonalInfo(UpdateProfileRequest $request)
    {
        $output = $this->userRepository->updatePersonalInfo(
            $request->user()->id,
            $request->only('full_name_ar', 'full_name_en', 'full_name_tr', 'phone', 'gender', 'country', 'email', 'profile_image'),
            $request->has('profile_image') ? $request->file('profile_image') : false
        );

        // E-mail address was updated, user has to reconfirm
        if (is_array($output) && $output['email_changed']) {
            auth()->logout();

            return redirect()->route('frontend.auth.login')->withFlashInfo(__('strings.frontend.user.email_changed_notice'));
        }

        return redirect()->route('frontend.user.account')->withFlashSuccess(__('strings.frontend.user.profile_updated'));
    }

    /**
     * @param UpdateProfileRequest $request
     *
     * @throws \App\Exceptions\GeneralException
     * @return mixed
     */
    public function updateCompanyInfo(UpdateProfileRequest $request)
    {
        $output = $this->userRepository->updateCompanyInfo(
            $request->user()->id,
            $request->only(
                'company_name_en',
                'company_name_ar',
                'company_name_tr',
                'sicil_no',
                'sectors',
                'fields',
                'year_founded',
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
                'company_logo',
                'avatar_type',
                'main_location_tr'
            ),
            $request->has('company_logo') ? $request->file('company_logo') : false
        );


        if($output){
        $user = User::find($request->user()->id);
        $user->sectors()->sync($request->sectors);
        $user->fields()->sync($request->fields);
        }




        return redirect()->route('frontend.user.account')->withFlashSuccess(__('strings.frontend.user.profile_updated'));
    }










    /**
     * @param UpdateProfileRequest $request
     *
     * @throws \App\Exceptions\GeneralException
     * @return mixed
     */
    public function updateContactInfo(UpdateProfileRequest $request)
    {
        $output = $this->userRepository->updateContactInfo(
            $request->user()->id,
            $request->only('facebook_url','instagram_url','linkedin_url','twitter_url'),
        );
        return redirect()->route('frontend.user.account')->withFlashSuccess(__('strings.frontend.user.profile_updated'));
    }


}
