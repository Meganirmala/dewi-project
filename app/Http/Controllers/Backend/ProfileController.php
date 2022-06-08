<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:profile-list|profile-create|profile-edit|profile-delete', ['only' => ['index','show']]);
         $this->middleware('permission:profile-create', ['only' => ['create','store']]);
         $this->middleware('permission:profile-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:profile-delete', ['only' => ['destroy']]);
    }
    public function profileDesa()
    {
        //
        $profile_desa = Profile::first();
        return view('profile.create', compact('profile_desa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profileDesa_store(Request $request)
    {
        //
        $profile_desa = Profile::first();

        if(is_null($profile_desa)){
            $create_profile_desa = Profile::updateOrcreate([
                'description' =>$request->description,
            ]);
            return redirect()->route('profileDesa')
            ->with('success','Profile Desa succefully added.');
        }
        else{
            $data = [
                'description' =>$request->description,
            ];
            $update_profile_desa = Profile::whereRaw('1' == '1')->update($data);
            return redirect()->route('profileDesa')
            ->with('success','Profile Desa succefully added.');
        }
    }

      
}
