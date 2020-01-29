<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;

/**
 * Class MembersController.
 */
class MembersController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $members = User::all();
        return view('frontend.members',compact('members'));
    }


    public function member(User $member)
    {
        return view('frontend.member-single')
            ->withUser($member);
    }



}
