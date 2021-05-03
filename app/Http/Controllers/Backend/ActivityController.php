<?php



namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseBackendController;
use App\Models\backend\activity;
use App\Models\backend\activity_type;
use App\Models\backend\unit_type;
use App\Models\frontend\activity_images;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ActivityController extends BaseBackendController
{

    private $uploadPath = "uploads/activities/";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activities = activity::all();
        return view('backend.activity.index', compact('activities'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activity_types = activity_type::all();
        $unit_types = unit_type::all();
        return view('backend.activity.create',compact('activity_types', 'unit_types'));
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

        // Start of Upload Files
        if ($request->hasFile('f_image')) {
            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload
            $path = $request->file('f_image')->move('uploads/activities', $fileNameToStore);
        } else {
            $fileNameToStore = 'f_image.jpg';
        }


        $activity = new activity;


        $activity->f_image = $fileNameToStore;
        $activity->title_ar = $request->title_ar;
        $activity->title_tr = $request->title_tr;
        $activity->title_en = $request->title_en;

        $activity->text_ar = $request->text_ar;
        $activity->text_tr = $request->text_tr;
        $activity->text_en = $request->text_en;



        $activity->slug =  Str::slug($request->title_en);

        $activity->date = $request->date;


        $activity->save();



        // Start of Upload Files
        if ($request->hasFile('activity_images')) {
            $all_images = $request->file('activity_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $activity_images = new activity_images;
                $activity_images->activity_id = $activity->id;
                $activity_images->activity_image_path = $image_name;
                $activity_images->save();
            }
        }
        $activity->activity_types()->sync($request->activity_type);
        $activity->unit_types()->sync($request->unit_type);



        return redirect(route('admin.activity.index'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Activity  $activity
     * @return \Illuminate\Http\Response
     */
    public function show(Activity $activity)
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

        $activity = activity::where('id', $id)->first();
        $activity_types = activity_type::all();
        $unit_types = unit_type::all();
        return view('backend.activity.edit', compact('activity', 'activity_types', 'unit_types'));


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

            // 'image'=>'required',
        ]);




        // End of Upload Files
        $activity = activity::find($id);
        //   $activity->image = $imageUrl;



        // Start of Upload Files
        // file upload
        if ($request->hasFile('f_image')) {

            $activityx = activity::find($id);  // here to store image alone
            // Delete a style_logo_en photo
            if ($activityx->f_image != "") {
                unlink('uploads/activities/' . $activityx->f_image);
            }

            $fileNameWithExt = $request->file('f_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('f_image')->getClientOriginalExtension();

            $fileNameToStore =  time() . '.' . $extension;
            // upload

            $path = $request->file('f_image')->move('uploads/activities', $fileNameToStore);

            $activityx->f_image = $fileNameToStore;
            $activityx->save();
        }

        $activity->title_ar = $request->title_ar;
        $activity->title_tr = $request->title_tr;
        $activity->title_en = $request->title_en;

        $activity->text_ar = $request->text_ar;
        $activity->text_tr = $request->text_tr;
        $activity->text_en = $request->text_en;



        $activity->slug =  Str::slug($request->title_en);
        $activity->date = $request->date;



        $activity->save();
        // Start of Upload Files
        if ($request->hasFile('activity_images')) {
            $all_images = $request->file('activity_images');
            $path = $this->getUploadPath();
            foreach ($all_images as $file) {
                $image_name = time() . rand(1111, 9999) . '.' . $file->getClientOriginalExtension();
                $file->move($path, $image_name);
                $activity_images = new activity_images;
                $activity_images->activity_id = $id;
                $activity_images->activity_image_path = $image_name;
                $activity_images->save();
            }
        }
        $activity->activity_types()->sync($request->activity_type);

        $activity->unit_types()->sync($request->unit_type);


        return redirect(route('admin.activity.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = activity::find($id);
        $activity_images = activity_images::where('activity_id', $id)->get();
        foreach ($activity_images as $image) {
            unlink('uploads/activities/' . $image->activity_image_path);
        }
        unlink('uploads/activities/' . $activity->f_image);
        $activity->delete();
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
        $images = new activity_images();
        $images = activity_images::find($id);
        File::delete($this->getUploadPath() . $images->activity_image_path);
        $images->delete($id);
        return response()->json([
            'success' => 'Data has been deleted successfully!'
        ]);
    }

}
