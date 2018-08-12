<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Question;
use App\Comment;
class QuestionController extends Controller
{
    //


    public function askQuestion(){

    	if(Auth::check()){
    				return view('uploadqs');
    			}
    			return redirect('/');
    }

    public function postQuestion(Request $request){

    	$ques = new Question;

    	$ques->content = $request->input('content');
    	$ques->save();

    	return redirect()->back()->with('message','true');


    }

    public function archiveCheck(){
    	if(Auth::check()){
    				return view('questionarchive');
    			}
    			return redirect('/');
    }


    public function postComment(Request $request){

    			$comment = new Comment;
    			$comment->content = $request->input('content');

    			$comment->question_id = $request->input('question_id');

                $comment->idx = $request->input('no');

    			$comment->save();

    			return redirect()->back();
    }

    public function delete($id,$comment_id){
      if(Auth::user()->id==$id){ 

       DB::table('comments')->where('idx',$id)->where('id',$comment_id)->delete();
       

        return redirect('/archive/question');
    }
         return redirect('/archive/question');
    }
}
