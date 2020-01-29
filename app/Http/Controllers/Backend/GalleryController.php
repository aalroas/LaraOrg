<?php



namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\backend\gallery;
use App\Models\frontend\gallery_images;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class GalleryController extends Controller
{

    private $uploadPath = "uploads/galleries/";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = gallery::all();
        return view('backend.gallery.index', compact('galleries'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.gallery.create');
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
            'title_ar' => 'required',
        ]);


        $gallery = new gallery;



        $gallery->title_ar = $request->title_ar;
        $gallery->title_tr = $request->title_tr;
        $gallery->title_en = $request->title_en;



        $gallery->video_url = $request->video_url;


        $gallery->type = $request->type;

        $gallery->save();



        // Start of Upload Files
        if ($request->hasFile('gallery_images')) {
            $all_images = $request->file('gallery_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $gallery_images = new gallery_images;
                $gallery_images->gallery_id = $gallery->id;
                $gallery_images->gallery_image_path = $image_name;
                $gallery_images->save();
            }
        }


        return redirect(route('admin.gallery.index'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $gallery)
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

        $gallery = gallery::where('id', $id)->first();
        return view('backend.gallery.edit', compact('gallery'));
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
            'title_ar' => 'required',


        ]);





        $gallery = gallery::find($id);





        $gallery->title_ar = $request->title_ar;
        $gallery->title_tr = $request->title_tr;
        $gallery->title_en = $request->title_en;






        $gallery->type = $request->type;
        $gallery->video_url = $request->video_url;

        $gallery->save();
        // Start of Upload Files
        if ($request->hasFile('gallery_images')) {
            $all_images = $request->file('gallery_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $gallery_images = new gallery_images;
                $gallery_images->gallery_id = $id;
                $gallery_images->gallery_image_path = $image_name;
                $gallery_images->save();
            }
        }


        return redirect(route('admin.gallery.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        gallery::where('id', $id)->delete();
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
        $images = new gallery_images();
        $images = gallery_images::find($id);
        File::delete($this->getUploadPath() . $images->gallery_image_path);
        $images->delete($id);

        return response()->json([
            'success' => 'Data has been deleted successfully!'
        ]);
    }

}
