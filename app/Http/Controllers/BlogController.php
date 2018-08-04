<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Blog;
use Auth;
class BlogController extends Controller
{
    public function formBlog(){
    	if(Auth::check()){
    				return view('blog');
    			}
    			return redirect('/');
    }
    public function postBlog(Request $request){

    	$blog=new Blog;
    	$blog->title = $request->input('title');
    	$blog->content = $request->input('content');
    	$blog->save();

    	return redirect()->back()->with('message','true');

    }

    public function barccheck(){
    	if(Auth::check()){
    		return view('blogarchive');
    	}
    	return redirect('/');
    }
}
