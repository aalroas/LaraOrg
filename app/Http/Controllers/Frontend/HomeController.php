<?php

namespace App\Http\Controllers\Frontend;

use Carbon\Carbon;
use App\Models\backend\about;
use App\Models\backend\Event;
use App\Models\frontend\post;
use App\Models\backend\slider;
use App\Models\backend\activity;
use App\Models\backend\StaticPages;
use App\Models\backend\testimonial;
use App\Http\Controllers\Frontend\BaseFrontendController;

/**
 * Class HomeController.
 */
class HomeController extends BaseFrontendController
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {


        $sliders = slider::where('status',1)->paginate();
        $event = Event::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date')->first();
        $events = Event::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date')->paginate(3);
        $about = about::find(1);
        //its just a dummy data object.
        $testimonials = testimonial::all();

        $posts = post::orderBy("id", "desc")->paginate(3);
        $activities = activity::orderBy("id", "desc")->paginate(3);

        $bylaws = StaticPages::where('id', 1)->select('g_title_ar', 'g_title_tr', 'g_title_en', 'g_text_ar', 'g_text_en', 'g_text_tr', 'g_pdf')->get()->first();





        return view('frontend.index',compact('sliders', 'event', 'events', 'about', 'testimonials', 'posts', 'activities', 'bylaws'));
    }
}
