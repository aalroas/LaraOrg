<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Auth\User;
use App\Models\backend\team;
use App\Models\backend\Event;
use App\Models\frontend\post;
use App\Models\backend\Gallery;
use App\Models\backend\activity;
use App\Models\backend\unit_type;
use App\Models\backend\StaticPages;
use App\Models\backend\activity_type;
use App\Http\Controllers\Frontend\BaseFrontendController;

/**
 * Class HomeController.
 */
class FrontPagesController extends BaseFrontendController
{

    public function activities()
    {
        $activities = activity::orderBy("id", "desc")->paginate(6);
        return view('frontend.activities.activities', compact('activities'));
    }


     public function activity(activity $activity)
    {
        return view('frontend.activities.activity-single', compact('activity'));
    }




    public function activitytype(activity_type $activitytype)
    {
        $activities = $activitytype->activities();

        return view('frontend.activities.activities_by_activity', compact('activitytype','activities'));
    }

    public function unittype(unit_type $unittype)
    {
        $posts = $unittype->posts();
        $activities = $unittype->activities();
        return view('frontend.news.news_by_unit', compact('unittype','posts', 'activities'));

    }


    public function news()
    {

        $posts = post::orderBy("id", "desc")->paginate(6);
        return view('frontend.news.news', compact('posts'));
    }


    public function news_single(Post $post)
    {
        return view('frontend.news.new-single', compact('post'));
    }


    public function unit_type_news(unit_type $unittype)
    {
        $posts = $unittype->posts();
        $activities = $unittype->activities();
        return view('frontend.news.news_by_unit', compact('unittype','posts', 'activities'));
    }


    public function organizational_structure()
    {
        $o_s = StaticPages::where('id', 1)->select('o_title_ar', 'o_title_tr', 'o_title_en', 'o_text_ar', 'o_text_en', 'o_text_tr', 'o_image')->get()->first();
        return view('frontend.organizational-structure', compact('o_s'));
    }

    public function bylaws()
    {
        $bylaws = StaticPages::where('id', 1)->select('g_title_ar', 'g_title_tr', 'g_title_en', 'g_text_ar', 'g_text_en', 'g_text_tr', 'g_pdf')->get()->first();
        return view('frontend.bylaws', compact('bylaws'));
    }



    public function executive_management()
    {
        $teams = team::all();
        return view('frontend.executive-management', compact('teams'));
    }




    public function events()
    {
        $events = Event::orderBy("id","desc")->paginate(6);
        return view('frontend.events.events', compact('events'));
    }


    public function event(Event $event)
    {
        return view('frontend.events.event-single', compact('event'));
    }









    public function terms_of_use()
    {
        $terms_of_use = StaticPages::where('id', 1)->select('t_title_ar', 't_title_tr', 't_title_en', 't_text_ar', 't_text_en', 't_text_tr')->get()->first();
        return view('frontend.terms-of-use', compact('terms_of_use'));
    }




    public function privacy_policy()
    {
        $privacy_policy = StaticPages::where('id', 1)->select('p_title_ar', 'p_title_tr', 'p_title_en', 'p_text_ar', 'p_text_en', 'p_text_tr')->get()->first();
        return view('frontend.privacy-policy', compact('privacy_policy'));
    }



    public function board_of_directors()
    {
        $members = User::Where('is_board',1)->get();
        return view('frontend.board-of-directors', compact('members'));
    }





    public function gallery()
    {
        $galleries = Gallery::orderBy("id", "desc")->paginate(9);
        return view('frontend.gallery', compact('galleries'));
    }











}
