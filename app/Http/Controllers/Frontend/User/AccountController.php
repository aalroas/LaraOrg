<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Models\frontend\field;
use App\Models\frontend\sector;

/**
 * Class AccountController.
 */
class AccountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        $fields = field::all();
        $sectors = sector::all();

        return view('frontend.user.account',compact('fields', 'sectors'));
    }
}
