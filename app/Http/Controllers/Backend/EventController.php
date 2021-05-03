<?php

namespace App\Http\Controllers\Backend;

use Validator;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\Models\backend\Event;
use App\Http\Controllers\Backend\BaseBackendController;

class EventController extends BaseBackendController
{


    private $uploadPath = "uploads/events/";

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all()->sortByDesc("id");
        return view('backend.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
         return view('backend.event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'start_date' => 'required',
            'end_date' => 'required',
            'name_ar' => 'required',
            'text_ar' => 'required',
            'location_ar' => 'required'
        ]);

        // Start of Upload Files
        $formFileName = "image";
        $fileFinalName = "";
        if ($request->$formFileName != "") {
            $fileFinalName = time() . rand(
                1111,
                9999
            ) . '.' . $request->file($formFileName)->getClientOriginalExtension();
            $path = $this->getUploadPath();
            $request->file($formFileName)->move($path, $fileFinalName);
        }



        $event = new Event();
        $event->image =  $fileFinalName;
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->name_ar = $request->name_ar;
        $event->text_ar = $request->text_ar;
        $event->location_ar = $request->location_ar;

        $event->name_en = $request->name_en;
        $event->text_en = $request->text_en;
        $event->location_en = $request->location_en;

        $event->name_tr = $request->name_tr;
        $event->text_tr = $request->text_tr;
        $event->location_tr = $request->location_tr;

        $event->slug =  Str::slug($request->name_en);




        $event->save();


            return redirect('admin/events')->with('success', trans('Information has been added sucessfully'));

    }


    public function getUploadPath()
    {
        return $this->uploadPath;
    }

    public function setUploadPath($uploadPath)
    {
        $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $event = Event::find($id);

        return view('backend.event.edit', compact('event', 'id'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'start_date' => 'required',
            'end_date' => 'required',
            'name_ar' => 'required',

        ]);




        $event = Event::find($id);
        $event->start_date = $request->start_date;
        $event->end_date = $request->end_date;
        $event->name_ar = $request->name_ar;
        $event->text_ar = $request->text_ar;
        $event->location_ar = $request->location_ar;

        $event->name_en = $request->name_en;
        $event->text_en = $request->text_en;
        $event->location_en = $request->location_en;

        $event->name_tr = $request->name_tr;
        $event->text_tr = $request->text_tr;
        $event->location_tr = $request->location_tr;

        $event->slug =  Str::slug($request->name_en);



        // Start of Upload Files
        $formFileName = "image";
        $fileFinalName = "";
        if ($request->$formFileName != "") {
            // Delete a style_logo_en photo
            if ($event->image != "") {
                unlink('uploads/events/' . $event->image);
            }

            $fileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
            $path = $this->getUploadPath();
            $request->file($formFileName)->move($path, $fileFinalName);
            $eventx = Event::find($id);  // here to store image alone
            $eventx->image = $fileFinalName; // here there is  a bug when update profile image
            $eventx->save();
        }







        $event->save();

            return redirect('admin/events')->with('success', trans('Information has been updated sucessfully'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id);
        // Delete a style_logo_en photo
        if ($event->image != "") {
            unlink('uploads/events/' . $event->image);
        }
        $event->delete();
        return redirect('admin/events')->with('success', trans('Information has been deleted sucessfully'));
    }





}
