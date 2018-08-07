<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/book', function () {
    return view('books');
});

Route::get('/upload/video', 'UserController@vupcheck');
Route::post('/upload/video', 'UserController@video');
Route::get('/archive/video','UserController@varccheck');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/writeblog','BlogController@formBlog');
Route::post('/writeblog','BlogController@postBlog');
Route::get('/archive/blog','BlogController@barccheck');



Route::get('/askquestion','QuestionController@askQuestion');
Route::post('/askquestion','QuestionController@postQuestion');


Route::get('/archive/question','QuestionController@archiveCheck');
Route::post('/archive/question','QuestionController@postComment');