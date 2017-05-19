<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');

// Route::get('/', function () {
//     $data['profile']    = DB::table('profile')->select('*')->orderby('profile_id', 'DESC')->first();
//     return view('welcome',$data);
// });

Route::get('/login', function () {
    return view('auth.login');
});
Route::post('/login', 'AdminController@do_login');

Route::get('/admin/', 'AdminController@gallery_list');

Route::get('/logout', function(){
  return redirect('/login')->withCookie(Cookie::forget('admin'));
});

Route::get('/admin/gallery_add', 'AdminController@gallery_add');
Route::post('/admin/gallery_add', 'AdminController@gallery_add_process');
Route::get('/admin/gallery_edit/{id}', 'AdminController@gallery_edit');
Route::post('/admin/gallery_edit/{id}', 'AdminController@gallery_edit_process');
Route::get('//admin/gallery_delete/{id}', function($id){
  DB::table('gallery')->where('gallery_id', $id)->delete();
  return redirect('/admin/gallery');
});
// Route::get('/admin/gallery_edit', 'AdminController@gallery_edit')->name('id');
Route::get('/admin/gallery', 'AdminController@gallery_list');

Route::get('/admin/profile_add', 'AdminController@profile_add');
Route::post('/admin/profile_add', 'AdminController@profile_add_process');

Route::get('/admin/story_add', 'AdminController@story_add');
Route::post('/admin/story_add', 'AdminController@story_add_process');
Route::get('/admin/story_edit/{id}', 'AdminController@story_edit');
Route::post('/admin/story_edit/{id}', 'AdminController@story_edit_process');
Route::get('//admin/story_delete/{id}', function($id){
  DB::table('story')->where('story_id', $id)->delete();
  return redirect('/admin/story');
});
Route::get('/admin/story', 'AdminController@story_list');

Route::get('/admin/map_add', 'AdminController@map_add');
Route::post('/admin/map_add', 'AdminController@map_add_process');
Route::get('/admin/map_edit/{id}', 'AdminController@map_edit');
Route::post('/admin/map_edit/{id}', 'AdminController@map_edit_process');
Route::get('//admin/map_delete/{id}', function($id){
  DB::table('maps')->where('map_id', $id)->delete();
  return redirect('/admin/map');
});
Route::get('/admin/map', 'AdminController@map_list');

Route::get('/admin/produk_edit/{id}', 'AdminController@produk_edit');
Route::post('/admin/produk_edit/{id}', 'AdminController@produk_edit_process');

// Route::get('/admin/login', 'AdminController@login');

Route::get('/','HomeController@index');
