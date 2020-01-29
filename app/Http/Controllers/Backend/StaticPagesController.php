<?php

namespace App\Http\Controllers\Backend;


use App\Models\backend\StaticPages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;


class StaticPagesController extends Controller
{
    // Define Default statics ID

    private $uploadPath = "uploads/static/";
    private $id = 1;

    public function edit()
    {
        $id = $this->getId();
        $static = StaticPages::find($id);
        if (!empty($static)) {
            return view('backend.static', compact('static'));
        } else {
            return redirect()->route('admin.static');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id = 1 for default statics
     * @return \Illuminate\Http\Response
     */


     public function updategeneral(Request $request)
    {
        //
        $id = $this->getId();
        $static = StaticPages::find($id);
        if (!empty($static)) {




            $static->g_title_ar = $request->g_title_ar;
            $static->g_title_tr = $request->g_title_tr;
            $static->g_title_en = $request->g_title_en;

            $static->g_text_ar = $request->g_text_ar;
            $static->g_text_en = $request->g_text_en;
            $static->g_text_tr = $request->g_text_tr;




            $formFileNameEn = "g_pdf";
            $fileFinalNameEn = "";
            if ($request->$formFileNameEn != "") {
                // Delete a g_pdf photo
                if ($request->g_pdf != "") {
                    File::delete($this->getUploadPath() . $static->g_pdf);
                }
                $fileFinalNameEn = time() . rand(
                    1111,
                    9999
                ) . '.' . $request->file($formFileNameEn)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formFileNameEn)->move($path, $fileFinalNameEn);
            }


            if ($fileFinalNameEn != "") {
                $static->g_pdf = $fileFinalNameEn;
            }

            $static->save();
            return redirect(route('admin.static.edit'))->with('message', 'Updated successfully');
        } else {
            return redirect()->route('admin.dashboard');
        }
    }



     public function updateorg(Request $request)
    {
        //
        $id = $this->getId();
        $static = StaticPages::find($id);
        if (!empty($static)) {



            $static->o_title_ar = $request->o_title_ar;
            $static->o_title_tr = $request->o_title_tr;
            $static->o_title_en = $request->o_title_en;

            $static->o_text_ar = $request->o_text_ar;
            $static->o_text_en = $request->o_text_en;
            $static->o_text_tr = $request->o_text_tr;






            // Start of Upload Files

            // logo icin
            $formFileName = "o_image";
            $fileFinalName = "";
            if ($request->$formFileName != "") {
                // Delete a style_logo_en photo
                if ($static->o_image != "") {
                      File::delete($this->getUploadPath() . $static->o_image);
                }
                $fileFinalName = time() . rand(
                    1111,
                    9999
                ) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formFileName)->move($path, $fileFinalName);
            }



            // End of Upload Files

            if ($fileFinalName != "") {
                $static->o_image = $fileFinalName;
            }



            $static->save();
            return redirect(route('admin.static.edit'))->with('message', 'Updated successfully');
        } else {
            return redirect()->route('admin.dashboard');
        }
    }



   public function updateprivacy(Request $request)
    {
        //
        $id = $this->getId();
        $static = StaticPages::find($id);
        if (!empty($static)) {


            $static->p_title_ar = $request->p_title_ar;
            $static->p_title_tr = $request->p_title_tr;
            $static->p_title_en = $request->p_title_en;

            $static->p_text_ar = $request->p_text_ar;
            $static->p_text_en = $request->p_text_en;
            $static->p_text_tr = $request->p_text_tr;

            $static->save();
            return redirect(route('admin.static.edit'))->with('message', 'Updated successfully');
        } else {
            return redirect()->route('admin.dashboard');
        }
    }



   public function updateterims(Request $request)
    {
        //
        $id = $this->getId();
        $static = StaticPages::find($id);
        if (!empty($static)) {
            $static->t_title_ar = $request->t_title_ar;
            $static->t_title_tr = $request->t_title_tr;
            $static->t_title_en = $request->t_title_en;

            $static->t_text_ar = $request->t_text_ar;
            $static->t_text_en = $request->t_text_en;
            $static->t_text_tr = $request->t_text_tr;

            $static->save();
            return redirect(route('admin.static.edit'))->with('message', 'Updated successfully');
        } else {
            return redirect()->route('admin.dashboard');
        }
    }

    // update tab of site status
    public function getUploadPath()
    {
        return $this->uploadPath;
    }
    // update tab of Style statics
    public function setUploadPath($uploadPath)
    {
        $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
    }
}
