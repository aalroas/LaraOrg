<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\about;
use App\Models\backend\slider;
use App\Models\backend\Event;
use Carbon\Carbon;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {


        $sliders = slider::all();
        $event = Event::where('start_date', '>=', date('Y-m-d'))->orderBy('start_date')->first();
        $events = Event::orderBy("id", "desc")->paginate(3);
        $about = about::Select("about_title_ar", "about_title_en", "about_title_tr", "about_text_ar", "about_text_en", "about_text_tr", "url", "about_image")
        ->where("id", 1)->first();
        return view('frontend.index',compact('sliders', 'event', 'events', 'about'));
    }
}
