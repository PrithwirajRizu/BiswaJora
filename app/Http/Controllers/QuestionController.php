<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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

                $comment->name = $request->input('name');

    			$comment->save();

    			return redirect()->back();
    }
}
