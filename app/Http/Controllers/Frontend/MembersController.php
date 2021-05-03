<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Frontend\BaseFrontendController;
use App\Models\Auth\User;
use App\Models\frontend\field;
use App\Models\frontend\sector;
use Illuminate\Http\Request;

/**
 * Class MembersController.
 */
class MembersController extends BaseFrontendController
{
    /**
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $sectors = sector::all();
        $fields = field::all();

        if($request->field != '' or $request->sector != '' ){
            $members = User::whereHas('fields', function ($q) use ($request) {
                $q->where('field_id', $request->field);
            })->OrwhereHas('sectors', function ($q) use ($request) {
                $q->where('sector_id', $request->sector);
            })
            ->active()
            ->paginate(20);
 
    
    
        } else {
                 $members = User::active()
                ->paginate(12);
        }
        return view('frontend.members.members',compact('members', 'sectors', 'fields'));
    }


    public function member(User $member)
    {
          if ($member->isActive()) {
            return view('frontend.members.member-single')
            ->withUser($member);
        }else{
              return back();
        }
    }



}
