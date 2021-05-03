<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseBackendController;
use App\Models\frontend\tag;

class TagController extends BaseBackendController
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $tags = tag::all();
      return view('backend.blog.tag.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.blog.tag.create');
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
        'slug'=>'required',]);
      $tag = new tag;
      $tag->name_tr = $request->name_tr;
      $tag->name_en = $request->name_en;
      $tag->name_ar = $request->name_ar;
      $tag->slug = $request->slug;
      $tag->save();
     return redirect(route('admin.tag.index'));
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
      $tag = tag::where('id',$id)->first();
       return view('backend.blog.tag.edit',compact('tag'));
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
        'slug'=>'required',

      ]);
      $tag = tag::find($id);
      $tag->name_tr = $request->name_tr;
      $tag->name_en = $request->name_en;
      $tag->name_ar = $request->name_ar;
      $tag->slug = $request->slug;
      $tag->save();
     return redirect(route('admin.tag.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tag::where('id',$id)->delete();
        return redirect()->back();
    }
}
