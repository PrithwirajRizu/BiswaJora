<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
class UserController extends Controller
{
    //
    public function video(Request $request){

    	$video=new Video;

		$video->link=$request->input('videoLink');
		$video->title=$request->input('title');

		if(is_null($video->link) or is_null($video->title) ){
			return redirect('/archive');

		}
		
		$cnt=Video::where('link',$video->link)->count();

		if($cnt==0){

			$video->save();
		}
		//return "hello world";
		return redirect('/archive/video');

    }
}
