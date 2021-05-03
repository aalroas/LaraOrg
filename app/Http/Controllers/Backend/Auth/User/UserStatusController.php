<?php

namespace App\Http\Controllers\Backend\Auth\User;

use App\Models\Auth\User;
use App\Repositories\Backend\Auth\UserRepository;
use App\Http\Controllers\Backend\BaseBackendController;
use App\Http\Requests\Backend\Auth\User\ManageUserRequest;
use App\Notifications\Frontend\Auth\UserNeedsConfirmation;

/**
 * Class UserStatusController.
 */
class UserStatusController extends BaseBackendController
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @param ManageUserRequest $request
     *
     * @return mixed
     */
    public function getDeactivated(ManageUserRequest $request)
    {
        return view('backend.auth.user.deactivated')
            ->withUsers($this->userRepository->getInactivePaginated(25, 'id', 'asc'));
    }

    /**
     * @param ManageUserRequest $request
     *
     * @return mixed
     */
    public function getDeleted(ManageUserRequest $request)
    {
        return view('backend.auth.user.deleted')
            ->withUsers($this->userRepository->getDeletedPaginated(25, 'id', 'asc'));
    }

    /**
     * @param ManageUserRequest $request
     * @param User              $user
     * @param                   $status
     *
     * @throws \App\Exceptions\GeneralException
     * @return mixed
     */
    public function mark(ManageUserRequest $request, User $user, $status)
    {
        $this->userRepository->mark($user, (int) $status);

        if((int) $status === 1){
            $user->notify(new UserNeedsConfirmation($status));
            return redirect()->route('admin.auth.user.index')->withFlashSuccess(__('alerts.backend.users.updated'));
        }else {
            $user->notify(new UserNeedsConfirmation($status));
            return redirect()->route('admin.auth.user.deactivated')->withFlashSuccess(__('alerts.backend.users.updated'));
        }



    }

    /**
     * @param ManageUserRequest $request
     * @param User              $deletedUser
     *
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     * @return mixed
     */
    public function delete(ManageUserRequest $request, User $deletedUser)
    {
        $this->userRepository->forceDelete($deletedUser);

        return redirect()->route('admin.auth.user.deleted')->withFlashSuccess(__('alerts.backend.users.deleted_permanently'));
    }

    /**
     * @param ManageUserRequest $request
     * @param User              $deletedUser
     *
     * @throws \App\Exceptions\GeneralException
     * @return mixed
     */
    public function restore(ManageUserRequest $request, User $deletedUser)
    {
        $this->userRepository->restore($deletedUser);

        return redirect()->route('admin.auth.user.index')->withFlashSuccess(__('alerts.backend.users.restored'));
    }
}
