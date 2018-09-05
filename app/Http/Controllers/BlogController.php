<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Blog;
use App\Upvote;
use Auth;

use DB;
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
        $blog->idx = $request->input('no');
        $blog->upvote=0;
        
    	$blog->save();

    	return redirect()->back()->with('message','true');

    }

    public function barccheck(){
    	if(Auth::check()){
    		return view('blogarchive');
    	}
    	return redirect('/');
    }

    public function addUpvote(Request $request){


                    $idx=$request->input('postidx');
                    $name=$request->input('username');
                    $cnt= DB::table('upvotes')->where('postidx',$idx)->where('upvoter',$name)->count();

                    if($cnt==0){
                        DB::table('blogs')->where('id',$idx)->increment('upvote');
                        $up = new Upvote;
                        $up->postidx = $idx;
                        $up->upvoter = $name;
                        $up->save();

                    }
                    
                    return redirect()->back();
    }
}
