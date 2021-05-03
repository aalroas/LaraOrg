<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Frontend\BaseFrontendController;
use App\Http\Requests\Frontend\User\UpdatePasswordRequest;
use App\Repositories\Frontend\Auth\UserRepository;

/**
 * Class UpdatePasswordController.
 */
class UpdatePasswordController extends BaseFrontendController
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * ChangePasswordController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param UpdatePasswordRequest $request
     *
     * @throws \App\Exceptions\GeneralException
     * @return mixed
     */
    public function update(UpdatePasswordRequest $request)
    {
        $this->userRepository->updatePassword($request->only('old_password', 'password'));

        return redirect()->route('frontend.user.account')->withFlashSuccess(__('strings.frontend.user.password_updated'));
    }
}
