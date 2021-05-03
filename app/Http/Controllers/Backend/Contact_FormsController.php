<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Backend\BaseBackendController;
use App\Models\backend\contact_form;

class Contact_FormsController extends BaseBackendController
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = contact_form::orderBy('created_at', 'DESC')->get();
        return view('backend.contact.index', compact('contacts'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = contact_form::find($id);
        return view('backend.contact.show', compact('contact'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Admin\Model\contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        contact_form::where('id', $id)->delete();
        return redirect()->back()->with('message', 'Contact Deleted Sucsessfully');
    }
}
