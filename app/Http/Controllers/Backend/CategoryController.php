<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseBackendController;
use App\Models\frontend\Category;

class CategoryController extends BaseBackendController
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = category::all();

        return view('backend.blog.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('backend.blog.category.create');
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
            'slug' => 'required',

        ]);
        $category = new category;
        $category->name_ar = $request->name_ar;
        $category->name_tr = $request->name_tr;
        $category->name_en = $request->name_en;
        $category->slug = $request->slug;
        $category->save();
        return redirect(route('admin.category.index'));
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
        $category = category::where('id', $id)->first();
        return view('backend.blog.category.edit', compact('category'));
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
            'slug' => 'required',

        ]);
        $category = category::find($id);
        $category->name_ar = $request->name_ar;
        $category->name_tr = $request->name_tr;
        $category->name_en = $request->name_en;
        $category->slug = $request->slug;
        $category->save();
        return redirect(route('admin.category.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      category::where('id',$id)->delete();
      return redirect()->back();
    }
}
