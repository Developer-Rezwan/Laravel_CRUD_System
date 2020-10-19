<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

/**** Form Registration ****/
Route::get('register','App\Http\Controllers\RegisterController@register');
Route::post('register','App\Http\Controllers\RegisterController@user');

/**** From Login ****/
Route::get('login','App\Http\Controllers\LoginController@login')->name('login');
Route::post('login','App\Http\Controllers\LoginController@check');

/*** Login Authentication system-1 ****/
Route::group(['middleware'=>'auth'],function(){
  Route::get('logout',function(){
   Auth::logout();
   return redirect()->to('/login');
  });
  Route::get('/','App\Http\Controllers\IndexController@Index');
});

/*** Login Authentication system-2***/
Route::get('checker',function(){
  if(Auth::check()){
	Route::get('/','App\Http\Controllers\IndexController@Index');
}else{
	return redirect()->to('/login');
}
});

/**** Image uploaded system *****/
Route::view('uploaded','upload.image');
Route::post('upload_image','App\Http\Controllers\ImageUpload@upload');
Route::get('viewer','App\Http\Controllers\ImageUpload@viewimage');
Route::get('viewImage',function(){
	return view('viewImage');
});

/**** Delete image ****/
Route::get('delete_image','App\Http\Controllers\ImageUpload@delete');