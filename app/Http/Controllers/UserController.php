<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class UserController extends Controller
{
    //
    public function profile(){
    	return view('profile',array('user'=>Auth::user()));
    }
    public function profile_upload(Request $request){
    	if($request->file('profileimages')){
    		$profileimages=$request->file('profileimages');
    		$filename=time().'.'. $profileimages->getClientOriginalExtension();
    		Image::make($profileimages)->resize(300,300)->save(public_path('upload/profileimages/'.$filename));
    		$user=Auth::user();
    		$user->profileimages=$filename;
    		$user->save();

    	}
    	return view('profile',array('user'=>Auth::user()));
    }
}
