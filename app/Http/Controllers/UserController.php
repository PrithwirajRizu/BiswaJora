<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
use Auth;

class UserController extends Controller
{
    
    public function video(Request $request) {

    	$video=new Video;

		$video->link=$request->input('videoLink');
		$video->title=$request->input('title');
        $video->save();

		return redirect()->back()->with('message','true');

    }
    public function varccheck(){
    			if(Auth::check()){
    				return view ('video');
    			}
    			return redirect ('/');
    }

    public function vupcheck(){
    			if(Auth::check()){
    				 return view('uploadvt');
    			}
    			return redirect ('/');
    }


}
