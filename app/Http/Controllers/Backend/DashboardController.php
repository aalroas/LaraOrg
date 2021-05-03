<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\BaseBackendController;
use App\Models\Auth\User;
use App\Models\backend\activity;
use App\Models\backend\activity_type;
use App\Models\backend\contact_form;
use App\Models\backend\Gallery;
use App\Models\backend\slider;
use App\Models\backend\team;
use App\Models\backend\testimonial;
use App\Models\backend\unit_type;
use App\Models\frontend\field;
use App\Models\frontend\post;
use App\Models\frontend\sector;
use App\Repositories\Backend\Auth\UserRepository;
use DevDojo\Chatter\Models\Category;
/**
 * Class DashboardController.
 */
class DashboardController extends BaseBackendController
{


    /**
     * SidebarComposer constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }


    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $users = User::count();

        $deleted_users = $this->userRepository->getDeletedCount();
        $testimonials = testimonial::count();
        $posts = post::count();
        $sliders = slider::count();
        $contact_forms = contact_form::count();
        $activities = activity::count();
        $galleries = Gallery::count();
        $boards = User::where('is_board',1)->count();
        $activitytypes = activity_type::count();
        $unittypes = unit_type::count();
        $teams = team::count();
        $sectors = sector::count();
        $fields = field::count();
        $forum_categories = Category::count();

        return view('backend.dashboard',compact('forum_categories','fields','sectors','teams', 'unittypes','activitytypes', 'deleted_users','users','testimonials','posts','sliders','contact_forms','activities','galleries','boards'));
    }
}
