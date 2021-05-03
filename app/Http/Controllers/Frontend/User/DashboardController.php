<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Frontend\BaseFrontendController;

/**
 * Class DashboardController.
 */
class DashboardController extends BaseFrontendController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('frontend.user.dashboard');
    }
}
