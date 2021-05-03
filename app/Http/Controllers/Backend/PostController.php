<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use App\Models\frontend\tag;
use Illuminate\Http\Request;
use App\Models\frontend\post;
use App\Models\frontend\category;
use App\Http\Controllers\Backend\BaseBackendController;
use App\Models\backend\unit_type;
use App\Models\frontend\post_images;
use Illuminate\Support\Facades\File;


class PostController extends BaseBackendController
{

      private $uploadPath = "uploads/posts/";
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = post::all();
      return view('backend.blog.post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $unit_types = unit_type::all();
        return view('backend.blog.post.create',compact('unit_types'));
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
          'title_ar'=>'required',


        ]);


        // Start of Upload Files
        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload
            $path = $request->file('f_image')->move('uploads/posts', $fileNameToStore);
        } else {
            $fileNameToStore = 'f_image.jpg';
        }


        $post = new post;


        $post->f_image = $fileNameToStore;


        $post->title_ar = $request->title_ar;
        $post->title_tr = $request->title_tr;
        $post->title_en = $request->title_en;

        $post->text_ar = $request->text_ar;
        $post->text_tr = $request->text_tr;
        $post->text_en = $request->text_en;



        $post->slug =  Str::slug($request->title_en);

        $post->date = $request->date;






        $post->save();



        // Start of Upload Files
        if ($request->hasFile('post_images')) {
            $all_images = $request->file('post_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $post_images = new post_images;
                $post_images->post_id = $post->id;
                $post_images->post_image_path = $image_name;
                $post_images->save();
            }
        }



         $post->unit_types()->sync($request->unit_type);




        return redirect(route('admin.post.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $post = post::where('id', $id)->first();


        $unit_types = unit_type::all();

        return view('backend.blog.post.edit',compact('unit_types', 'post'));


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
        'title_ar'=>'required',

        // 'image'=>'required',
      ]);




         // End of Upload Files
      $post = post::find($id);
        //   $post->image = $imageUrl;



        // Start of Upload Files
        // file upload
        if ($request->hasFile('f_image')) {
            $postx = post::find($id);  // here to store image alone
            // Delete a style_logo_en photo
            if ($postx->f_image != "") {
                unlink('uploads/posts/' . $postx->f_image);
            }

            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

            $path = $request->file('f_image')->move('uploads/posts', $fileNameToStore);

            $postx->f_image = $fileNameToStore;
            $postx->save();
        }

        $post->title_ar = $request->title_ar;
        $post->title_tr = $request->title_tr;
        $post->title_en = $request->title_en;

        $post->text_ar = $request->text_ar;
        $post->text_tr = $request->text_tr;
        $post->text_en = $request->text_en;



        $post->slug =  Str::slug($request->title_en);
        $post->date = $request->date;




      $post->save();

        // Start of Upload Files
        if ($request->hasFile('post_images')) {
            $all_images = $request->file('post_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $post_images = new post_images;
                $post_images->post_id = $id;
                $post_images->post_image_path = $image_name;
                $post_images->save();
            }
        }

        $post->unit_types()->sync($request->unit_type);



      return redirect(route('admin.post.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

     $post = post::find($id);
      $post_images = post_images::where('post_id', $id)->get();
      foreach ($post_images as $image) {
          unlink('uploads/posts/' . $image->post_image_path);

      }
      unlink('uploads/posts/' . $post->f_image);
      $post->delete();
      return redirect()->back();

    }



    public function getUploadPath()
    {
        return $this->uploadPath;
    }

    public function setUploadPath($uploadPath)
    {
        $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
    }

    public function deleteImage($id)
    {
        //For Deleting
        $images = new post_images();
        $images = post_images::find($id);
        File::delete($this->getUploadPath() . $images->post_image_path);
        $images->delete($id);
        return response()->json([
            'success' => 'Data has been deleted successfully!'
        ]);
    }



}
