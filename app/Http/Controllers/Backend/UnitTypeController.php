<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use App\Models\backend\unit_type;
use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseBackendController;

class UnitTypeController extends BaseBackendController
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $unittypes = unit_type::all();

        return view('backend.unittype.index', compact('unittypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.unittype.create');
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
        $unit_type = new unit_type;
        $unit_type->name_ar = $request->name_ar;
        $unit_type->name_tr = $request->name_tr;
        $unit_type->name_en = $request->name_en;

        $unit_type->slug = Str::slug($request->name_en);

        $unit_type->text_ar = $request->text_ar;
        $unit_type->text_tr = $request->text_tr;
        $unit_type->text_en = $request->text_en;


        $unit_type->save();
        return redirect(route('admin.unittype.index'));
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
        $unittype = unit_type::where('id', $id)->first();
        return view('backend.unittype.edit', compact('unittype'));
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
        $unit_type = unit_type::find($id);
        $unit_type->name_ar = $request->name_ar;
        $unit_type->name_tr = $request->name_tr;
        $unit_type->name_en = $request->name_en;


        $unit_type->text_ar = $request->text_ar;
        $unit_type->text_tr = $request->text_tr;
        $unit_type->text_en = $request->text_en;


        $unit_type->slug = Str::slug($request->name_en);

        $unit_type->save();
        return redirect(route('admin.unittype.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        unit_type::where('id', $id)->delete();
        return redirect()->back();
    }
}
