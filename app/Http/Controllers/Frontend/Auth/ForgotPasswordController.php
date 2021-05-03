<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Frontend\BaseFrontendController;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;

/**
 * Class ForgotPasswordController.
 */
class ForgotPasswordController extends BaseFrontendController
{
    use SendsPasswordResetEmails;

    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLinkRequestForm()
    {
        return view('frontend.auth.passwords.email');
    }
}
