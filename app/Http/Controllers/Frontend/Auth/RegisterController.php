<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Models\frontend\field;
use App\Models\frontend\sector;
use App\Models\backend\unit_type;
use Illuminate\Support\Facades\View;
use App\Models\backend\activity_type;
use App\Http\Requests\RegisterRequest;
use App\Events\Frontend\Auth\UserRegistered;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Repositories\Frontend\Auth\UserRepository;
use App\Http\Controllers\Frontend\BaseFrontendController;



/**
 * Class RegisterController.
 */
class RegisterController extends BaseFrontendController
{
    use RegistersUsers;

    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * RegisterController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {


        //its just a dummy data object.
        $headerunit_types = unit_type::all();
        $headeractivity_types = activity_type::all();
        // Sharing is caring

        View::share('headerunit_types', $headerunit_types);
        View::share('headeractivity_types', $headeractivity_types);


        $this->userRepository = $userRepository;
    }

    /**
     * Where to redirect users after login.
     *
     * @return string
     */
    public function redirectPath()
    {
        return route(home_route());
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {


        $sectors = sector::all();
        $fields = field::all();

        abort_unless(config('access.registration'), 404);

        return view('frontend.auth.register',compact('fields', 'sectors'));
    }

    /**
     * @param RegisterRequest $request
     *
     * @throws \Throwable
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function register(RegisterRequest $request)
    {
        abort_unless(config('access.registration'), 404);

        $user = $this->userRepository->create($request->only('sicil_no','avatar_type','full_name_ar', 'full_name_en', 'full_name_tr', 'phone', 'gender', 'company_name_en', 'company_name_ar', 'company_name_tr', 'year_founded', 'country', 'main_location_ar', 'main_location_en', 'main_location_tr', 'agency', 'number_of_employee', 'main_address_ar', 'main_address_en', 'main_address_tr', 'branches_addresses', 'main_product', 'brief_description_ar', 'brief_description_en', 'partner_companies', 'instagram_url', 'linkedin_url', 'facebook_url', 'twitter_url', 'profile_image', 'company_logo', 'email', 'password'));

        $user->sectors()->sync($request->sectors);
        $user->fields()->sync($request->fields);

        // If the user must confirm their email or their account requires approval,
        // create the account but don't log them in.
        if (config('access.users.confirm_email') || config('access.users.requires_approval')) {
            event(new UserRegistered($user));

            return redirect($this->redirectPath())->withFlashSuccess(
                config('access.users.requires_approval') ?
                    __('exceptions.frontend.auth.confirmation.created_pending') :
                    __('exceptions.frontend.auth.confirmation.created_confirm')
            );

        }

        auth()->login($user);

        event(new UserRegistered($user));

        return redirect($this->redirectPath());
    }
}

