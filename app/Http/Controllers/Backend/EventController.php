<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\backend\Event;

use Validator;

class EventController extends Controller
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

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return redirect('admin/events')
                    ->withErrors($validator)
                    ->withInput();
            }
        }

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
        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->name_ar = $request->input('name_ar');
        $event->text_ar = $request->input('text_ar');
        $event->location_ar = $request->input('location_ar');

        $event->name_en = $request->input('name_en');
        $event->text_en = $request->input('text_en');
        $event->location_en = $request->input('location_en');

        $event->name_tr = $request->input('name_tr');
        $event->text_tr = $request->input('text_tr');
        $event->location_tr = $request->input('location_tr');


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

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return redirect()->route('admin.events.edit', $id)
                    ->withErrors($validator)
                    ->withInput();
            }
        }


        // Start of Upload Files
        $formFileName = "image";
        $fileFinalName = "";
        if ($request->$formFileName != "") {
            $fileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
            $path = $this->getUploadPath();
            $request->file($formFileName)->move($path, $fileFinalName);
            $eventx = Event::find($id);  // here to store image alone
            $eventx->image = $fileFinalName; // here there is  a bug when update profile image
            $eventx->save();
        }


        $event = Event::find($id);
        $event->start_date = $request->input('start_date');
        $event->end_date = $request->input('end_date');
        $event->name_ar = $request->input('name_ar');
        $event->text_ar = $request->input('text_ar');
        $event->location_ar = $request->input('location_ar');


        $event->name_en = $request->input('name_en');
        $event->text_en = $request->input('text_en');
        $event->location_en = $request->input('location_en');

        $event->name_tr = $request->input('name_tr');
        $event->text_tr = $request->input('text_tr');
        $event->location_tr = $request->input('location_tr');



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
        $event->delete();
        return redirect('admin/events')->with('success', trans('Information has been deleted sucessfully'));
    }


    public function event($id = "")
    {
        $event = Event::where("id", $id)->first();
        return view('frontend.event-single', compact('event'));
    }


}
