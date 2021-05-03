<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseBackendController;
use App\Models\backend\about;


class AboutController extends BaseBackendController
{


    // Define Default Settings ID
    private $id = 1;
    private $uploadPath = "uploads/about/";

    public function edit()
    {
        $id = $this->getId();
        $about = about::find($id);
        if (!empty($about)) {
            return view('backend.about', compact('about'));
        } else {
            return redirect()->route('backend.dashboard');
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        $id = $this->getId();
        $about = about::find($id);
        if (!empty($about)) {
            $about->about_title_en = $request->about_title_en;
            $about->about_title_ar = $request->about_title_ar;
            $about->about_title_tr = $request->about_title_tr;

            $about->about_text_ar = $request->about_text_ar;
            $about->about_text_tr = $request->about_text_tr;
            $about->about_text_en = $request->about_text_en;

            $about->url = $request->url;

            // about_image icin
            $formFileName = "about_image";
            $fileFinalName = "";
            if ($request->$formFileName != "") {
                // Delete a style_logo_en photo
                if ($about->about_image != "") {
                    unlink('uploads/about/' . $about->about_image);
                }
                $fileFinalName = time() . rand(
                    1111,
                    9999
                ) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formFileName)->move($path, $fileFinalName);
            }



            if ($fileFinalName != "") {
                $about->about_image = $fileFinalName;
            }




            $about->mission_title_ar = $request->mission_title_ar;
            $about->mission_title_en = $request->mission_title_en;
            $about->mission_title_tr = $request->mission_title_tr;


            $about->mission_text_ar = $request->mission_text_ar;
            $about->mission_text_en = $request->mission_text_en;
            $about->mission_text_tr = $request->mission_text_tr;




            $about->vision_title_ar = $request->vision_title_ar;
            $about->vision_title_en = $request->vision_title_en;
            $about->vision_title_tr = $request->vision_title_tr;


            $about->vision_text_ar = $request->vision_text_ar;
            $about->vision_text_en = $request->vision_text_en;
            $about->vision_text_tr = $request->vision_text_tr;



            $about->objectives_title_ar = $request->objectives_title_ar;
            $about->objectives_title_en = $request->objectives_title_en;
            $about->objectives_title_tr = $request->objectives_title_tr;


            $about->objectives_text_ar = $request->objectives_text_ar;
            $about->objectives_text_en = $request->objectives_text_en;
            $about->objectives_text_tr = $request->objectives_text_tr;



            $about->counter1 = $request->counter1;
            $about->counter2 = $request->counter2;
            $about->counter3 = $request->counter3;
            $about->counter4 = $request->counter4;



            $about->counter_title_ar = $request->counter_title_ar;
            $about->counter_title_en = $request->counter_title_en;
            $about->counter_title_tr = $request->counter_title_tr;


            $about->counter_text_ar = $request->counter_text_ar;
            $about->counter_text_en = $request->counter_text_en;
            $about->counter_text_tr = $request->counter_text_tr;





            $formFileNameEn = "counter_image";
            $fileFinalNameEn = "";
            if ($request->$formFileNameEn != "") {
                // Delete a style_logo_en photo
                if ($about->page_image != "") {
                    unlink('uploads/about/' . $about->page_image);
                }
                $fileFinalNameEn = time() . rand(
                    1111,
                    9999
                ) . '.' . $request->file($formFileNameEn)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formFileNameEn)->move($path, $fileFinalNameEn);
            }
            // End of Upload Files


            if ($fileFinalNameEn != "") {
                $about->counter_image = $fileFinalNameEn;
            }




            $about->save();
            return redirect(route('admin.about.edit'))->with('message', trans('backend.updated_successfully'));
        } else {
            return redirect()->route('backend.dashboard');
        }
    }




    // update tab of site status

    public function getUploadPath()
    {
        return $this->uploadPath;
    }


    // update tab of Style Settings

    public function setUploadPath($uploadPath)
    {
        $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
    }
}
