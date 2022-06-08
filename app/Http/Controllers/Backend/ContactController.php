<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:contact-list|contact-create|contact-edit|contact-delete', ['only' => ['index','show']]);
         $this->middleware('permission:contact-create', ['only' => ['create','store']]);
         $this->middleware('permission:contact-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:contact-delete', ['only' => ['destroy']]);
    }
    public function contact()
    {
        //
        $contact_desa = Contact::first();
        return view('contact.create', compact('contact_desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function contact_store(Request $request)
    {
        //
        $contact_desa = Contact::first();

        if(is_null($contact_desa)){
            $create_contact = Contact::updateOrcreate([
                'telepon' =>$request->telepon,
                'email' =>$request->email,
                'alamat' =>$request->alamat,
                'instagram' =>$request->instagram,
            ]);
            return redirect()->route('contact')
            ->with('success','Contact succefully added.');
        }
        else{
            $data = [
                'telepon' =>$request->telepon,
                'email' =>$request->email,
                'alamat' =>$request->alamat,
                'instagram' =>$request->instagram,
            ];
            $update_contact = Contact::whereRaw('1' == '1')->update($data);
            return redirect()->route('contact')
            ->with('success','Contact succefully added.');
        }
    }

   
}
