<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseBackendController;
use App\Models\frontend\field;

class fieldController extends BaseBackendController
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $fields = field::all();

        return view('backend.field.index',compact('fields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('backend.field.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        $field = new field;
        $field->name_ar = $request->name_ar;
        $field->name_tr = $request->name_tr;
        $field->name_en = $request->name_en;

        $this->validate($request, [
            'name_ar' => 'required',


        ]);

        $field->save();
        return redirect(route('admin.field.index'));
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
        $field = field::where('id', $id)->first();
        return view('backend.field.edit', compact('field'));
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
        $field = field::find($id);
        $field->name_ar = $request->name_ar;
        $field->name_tr = $request->name_tr;
        $field->name_en = $request->name_en;

        $field->save();
        return redirect(route('admin.field.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      field::where('id',$id)->delete();
      return redirect()->back();
    }
}
