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

Route::get('/welcome', function () {
    return view('welcome');
});
Auth::routes();
//Route::get('/admin/menuawal','HalamanadminController@index');
//Route::get('/admin','AdminController@index');
Route::get('/home', 'HomeController@index');
Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');

//Route::resource('admin/penerimaan', 'PenerimaanController');
Route::post('admin/data','DataController@insert_data');
Route::get('chart', 'ChartsController@index');
Route::get('test','TestController@store');
//Route::get('data','PenerimaanController@data');

Route::group(['middleware' => ['web']], function () {
    Route::get('/','PageController@index');
    Route::resource('/penerimaan','PenerimaanController');
    Route::get('caripenerima','PenerimaanController@search');
});

//Route Untuk Amdin
route::get('admin/menu',['middleware' => 'admin', function(){
  return view('menuawaladmin');
}]);

route::group(['middleware' => 'admin'], function(){
  Route::get('/konfirmasi','PelamarController@view');
});
route::group(['middleware' => 'admin'], function(){
  Route::resource('perusahaan','PerusahaanController');
});



route::group(['middleware' => 'admin'], function(){
  Route::get('admin/penerimaan','PenerimaanController@index');
  Route::resource('penerimaan','PenerimaanController');
});
route::group(['middleware' => 'admin'], function(){
  Route::get('admin/postlowongan','lowonganController@view');
});
Route::group(['middleware' => 'user'], function(){
  Route::resource('pelamar','PelamarController');
});
Route::group(['middleware' => 'user'], function(){
  Route::resource('/home','HomeController');
});




//

//admin

route::get('admin/menu2/beranda',['middleware' => 'admin', function(){
  return view('menuadmin');
}]);
route::get('admin/menu2',['middleware' => 'admin', function(){
  return view('admin.admin');

}]);

Route::get('piechart', 'ChartsController@pie');
Route::get('barchart', 'ChartsController@bar');

Route::resource('pelamar', 'PelamarController');
Route::resource('pendidikan', 'PendidikanController');
Route::get('/profile/{name}','ProfileController@profile');

Route::resource('perusahaan', 'PerusahaanController');
Route::group(['middleware' => ['web']], function () {
    Route::resource('/images', 'ImageController');
});

Route::get('/uploadfile', 'FileuploadController@index');
Route::post('/uploadfile', 'FileuploadController@showfileupload');
Route::get('getPDF','PDFController@getPDF');

Route::resource('pengalaman', 'PengalamanController');
Route::resource('lowongan', 'lowonganController');
Route::get('/notifikasi','HalamanadminController@notifikasi');
