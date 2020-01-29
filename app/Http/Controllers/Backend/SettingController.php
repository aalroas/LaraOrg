<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\backend\Setting;
use Illuminate\Support\Facades\Auth; // error by tring to use restrict so i add it



class SettingController extends Controller
{

     // Define Default Settings ID
    private $id = 1;
    private $uploadPath = "uploads/settings/";



    public function edit()
    {
        $id = $this->getId();
        $Setting = Setting::find($id);
        if (!empty($Setting)) {
          return view('backend.setting',compact('Setting'));
        } else {
            return redirect()->route('admin.dashboard');
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
     * @param  int $id = 1 for default settings
     * @return \Illuminate\Http\Response
     */
    public function updateSiteInfo(Request $request)
    {
        //
        $id = $this->getId();
        $Setting = Setting::find($id);
        if (!empty($Setting)) {



            $Setting->site_title_en = $request->site_title_en;
            $Setting->site_title_tr = $request->site_title_tr;
            $Setting->site_title_ar = $request->site_title_ar;

            $Setting->site_url = $request->site_url;
            $Setting->site_email = $request->site_email;
            $Setting->site_mobile = $request->site_mobile;
            $Setting->site_phone = $request->site_phone;
            $Setting->site_fax = $request->site_fax;

            $Setting->site_whatsapp_url = $request->site_whatsapp_url;
            $Setting->site_instagram_url = $request->site_instagram_url;
            $Setting->site_facebook_url = $request->site_facebook_url;
            $Setting->site_twitter_url = $request->site_twitter_url;
            $Setting->site_linkedin_url = $request->site_linkedin_url;
            $Setting->site_youtube_url = $request->site_youtube_url;


            $Setting->site_meta_description_ar = $request->site_meta_description_ar;
            $Setting->site_meta_description_en = $request->site_meta_description_en;
            $Setting->site_meta_description_tr = $request->site_meta_description_tr;

            $Setting->site_meta_keywords_en = $request->site_meta_keywords_en;
            $Setting->site_meta_keywords_tr = $request->site_meta_keywords_tr;
            $Setting->site_meta_keywords_ar = $request->site_meta_keywords_ar;

            $Setting->copy_right_en = $request->copy_right_en;
            $Setting->copy_right_tr = $request->copy_right_tr;
            $Setting->copy_right_ar = $request->copy_right_ar;

            $Setting->site_address_en = $request->site_address_en;
            $Setting->site_address_tr = $request->site_address_tr;
            $Setting->site_address_ar = $request->site_address_ar;


            // Start of Upload Files

            // logo icin
            $formFileName = "site_logo_ar";
            $fileFinalName = "";
            if ($request->$formFileName != "") {
                // Delete a style_logo_en photo
                if ($Setting->site_logo_ar != "") {
                 //   File::delete($this->getUploadPath() . $Setting->site_logo_en);
                }
                $fileFinalName = time() . rand(1111,
                        9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formFileName)->move($path, $fileFinalName);
            }
             $formFileNameEn = "site_logo_en";
            $fileFinalNameEn = "";
            if ($request->$formFileNameEn != "") {
                // Delete a style_logo_en photo
                if ($request->site_logo_en != "") {
                    // File::delete($this->getUploadPath() . $Setting->site_logo_en);
                }
                $fileFinalNameEn = time() . rand(1111,
                        9999) . '.' . $request->file($formFileNameEn)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formFileNameEn)->move($path, $fileFinalNameEn);
            }

             $formFileNameTr = "site_logo_tr";
            $fileFinalNameTr = "";
            if ($request->$formFileNameTr != "") {
                // Delete a style_logo_en photo
                if ($Setting->site_logo_Tr != "") {
                 //   File::delete($this->getUploadPath() . $Setting->site_logo_en);
                }
                $fileFinalNameTr = time() . rand(1111,
                        9999) . '.' . $request->file($formFileNameTr)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formFileNameTr)->move($path, $fileFinalNameTr);
            }
// icon icin
             $formIconFileName = "site_icon_ar";
            $fileIconFinalName = "";
            if ($request->$formIconFileName != "") {
                // Delete a style_logo_en photo
                if ($Setting->site_logo_ar != "") {
                 //   File::delete($this->getUploadPath() . $Setting->site_logo_en);
                }
                $fileIconFinalName = time() . rand(1111,
                        9999) . '.' . $request->file($formIconFileName)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formIconFileName)->move($path, $fileIconFinalName);
            }
            $formIconFileNameEn = "site_icon_en";
            $fileIconFinalNameEn = "";
            if ($request->$formIconFileNameEn != "") {
                // Delete a style_logo_en photo
                if ($Setting->site_logo_en != "") {
                 //   File::delete($this->getUploadPath() . $Setting->site_logo_en);
                }
                $fileIconFinalNameEn = time() . rand(1111,
                        9999) . '.' . $request->file($formIconFileNameEn)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formIconFileNameEn)->move($path, $fileIconFinalNameEn);
            }

             $formIconFileNameTr = "site_icon_tr";
            $fileIconFinalNameTr = "";
            if ($request->$formIconFileNameTr != "") {
                // Delete a style_logo_en photo
                if ($Setting->site_logo_Tr != "") {
                 //   File::delete($this->getUploadPath() . $Setting->site_logo_en);
                }
                $fileIconFinalNameTr = time() . rand(1111,
                        9999) . '.' . $request->file($formIconFileNameTr)->getClientOriginalExtension();
                $path = $this->getUploadPath();
                $request->file($formIconFileNameTr)->move($path, $fileIconFinalNameTr);
            }

            // End of Upload Files

            if ($fileFinalName != "") {
                $Setting->site_logo_ar = $fileFinalName;
            }

              if ($fileFinalNameEn != "") {
                $Setting->site_logo_en = $fileFinalNameEn;
            }

             if ($fileFinalNameTr != "") {
                $Setting->site_logo_tr = $fileFinalNameTr;
            }


            if ($fileIconFinalName != "") {
                $Setting->site_icon_ar = $fileIconFinalName;
            }

              if ($fileIconFinalNameEn != "") {
                $Setting->site_icon_en = $fileIconFinalNameEn;
            }

             if ($fileIconFinalNameTr != "") {
                $Setting->site_icon_tr = $fileIconFinalNameTr;
            }


            $Setting->save();
           return redirect(route('admin.setting.edit'))->with('message','Setting updated successfully');
            // return redirect()->route('SettingController@edit')
            //     ->with('doneMessage', trans('cpanel.saveDone'))
            //     ->with('active_tab', $request->active_tab);
        }
        else {
            return redirect()->route('admin.dashboard');
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
