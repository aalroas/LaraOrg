<?php

namespace App\Http\Controllers\Backend;


use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseBackendController;
use App\Models\backend\team;

class  TeamController extends BaseBackendController
{


    private $uploadPath = "uploads/teams/";



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
     {
           $teams = team::all();
           return view('backend.team.index',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      // return  $request->all();
        $this->validate($request,[
          'name_ar' => ['required', 'string', 'max:255'],

          // 'image'=> ['required'],
      ]);



         // Start of Upload Files
      $formFileName = "image";
      $fileFinalName = "";
      if ($request->$formFileName != "") {
          $fileFinalName = time() . rand(1111,
                  9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
          $path = $this->getUploadPath();
          $request->file($formFileName)->move($path, $fileFinalName);
      }



      // End of Upload Files

        $team = new team;



        $team->image = $fileFinalName;

        $team->name_ar = $request->name_ar;
        $team->name_en = $request->name_en;
        $team->name_tr = $request->name_tr;


        $team->position_ar = $request->position_ar;
        $team->position_en = $request->position_en;
        $team->position_tr = $request->position_tr;



        $team->text_ar = $request->text_ar;
        $team->text_en = $request->text_en;
        $team->text_tr = $request->text_tr;

        $team->e_mail = $request->e_mail;
        $team->instagram = $request->instagram;
        $team->facebook = $request->facebook;
        $team->twitter = $request->twitter;
        $team->linkedin = $request->linkedin;


        $team->save();



        return redirect(route('admin.team.index'))->with('message', trans('backend.created_successfully'));



    }



    public function getUploadPath()
    {
        return $this->uploadPath;
    }

    public function setUploadPath($uploadPath)
    {
        $this->uploadPath = Config::get('app.APP_URL') . $uploadPath;
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Admin\Model\team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Admin\Model\team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $team = team::find($id);

      return view('backend.team.edit',compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Admin\Model\team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
          'name_ar' => ['required', 'string', 'max:255'],
          // 'image'=>'required',
      ]);

       // Start of Upload Files
         $formFileName = "image";
         $fileFinalName = "";

         if ($request->$formFileName != "") {
             $teamx = team::find($id);  // here to store image alone
            if ($teamx->image != "") {
                unlink('uploads/teams/' . $teamx->image);
            }
             $fileFinalName = time() . rand(1111, 9999) . '.' . $request->file($formFileName)->getClientOriginalExtension();
             $path = $this->getUploadPath();
             $request->file($formFileName)->move($path, $fileFinalName);
             $teamx->image = $fileFinalName; // here there is  a bug when update profile image
             $teamx->save();
         }



         // End of Upload Files
        $team = team::where('id',$id)->update($request->except('_token','_method','image'));
      // except image cus we handle it aboves


        return redirect(route('admin.team.index'))->with('message', trans('backend.updated_successfully'));




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Model\team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $team = team::where('id', $id)->get();
        unlink('uploads/teams/' . $team->image);
        $team->delete();
        return redirect()->back()->with('message', trans('backend.deleted_successfully'));



    }
}


