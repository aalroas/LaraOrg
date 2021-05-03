<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseBackendController;
use App\Models\frontend\sector;

class SectorController extends BaseBackendController
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $sectors = sector::all();
      return view('backend.sector.index', compact('sectors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.sector.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request,[
        'name_ar'=>'required',
        ]);
      $sector = new sector;
      $sector->name_tr = $request->name_tr;
      $sector->name_en = $request->name_en;
      $sector->name_ar = $request->name_ar;

      $sector->save();
     return redirect(route('admin.sector.index'));
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
      $sector = sector::where('id',$id)->first();
       return view('backend.sector.edit',compact('sector'));
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
      $this->validate($request,[
        'name_ar'=>'required',

      ]);
      $sector = sector::find($id);
      $sector->name_tr = $request->name_tr;
      $sector->name_en = $request->name_en;
      $sector->name_ar = $request->name_ar;

      $sector->save();
     return redirect(route('admin.sector.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        sector::where('id',$id)->delete();
        return redirect()->back();
    }
}
