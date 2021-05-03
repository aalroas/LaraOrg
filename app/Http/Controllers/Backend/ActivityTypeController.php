<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseBackendController;
use App\Models\backend\activity_type;

class ActivityTypeController extends BaseBackendController
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $activitytypes = activity_type::all();

        return view('backend.activitytype.index', compact('activitytypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.activitytype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_ar' => 'required',
        ]);
        $activity_type = new activity_type;
        $activity_type->name_ar = $request->name_ar;
        $activity_type->name_tr = $request->name_tr;
        $activity_type->name_en = $request->name_en;

        $activity_type->slug = Str::slug($request->name_en);


        $activity_type->text_ar = $request->text_ar;
        $activity_type->text_tr = $request->text_tr;
        $activity_type->text_en = $request->text_en;


        $activity_type->save();
        return redirect(route('admin.activitytype.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activity_type = activity_type::where('id', $id)->first();
        return view('backend.activitytype.edit', compact('activity_type'));
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
        $this->validate($request, [
            'name_ar' => 'required',
        ]);
        $activity_type = activity_type::find($id);
        $activity_type->name_ar = $request->name_ar;
        $activity_type->name_tr = $request->name_tr;
        $activity_type->name_en = $request->name_en;


        $activity_type->text_ar = $request->text_ar;
        $activity_type->text_tr = $request->text_tr;
        $activity_type->text_en = $request->text_en;

        $activity_type->slug = Str::slug($request->name_en);


        $activity_type->save();
        return redirect(route('admin.activitytype.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        activity_type::where('id', $id)->delete();
        return redirect()->back();
    }
}
