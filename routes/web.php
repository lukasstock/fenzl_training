<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('student', 'StudentController');
Route::resource('user', 'UserController');
Route::resource('comment', 'CommentController');
Route::get('drop', 'UserController@drop');
Route::get('ajax',function() {
    return view('message');
});
Route::post('/getmsg','AjaxController@index');