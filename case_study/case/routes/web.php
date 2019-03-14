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
Route::group(['prefix'=>'user'],function(){
	Route::group(['prefix'=>'page'],function(){
		Route::get('/vlxx.tv','PageController@index')->name('Trang-Chu');
		Route::get('/Loai-San-Pham','PageController@LoaiSP')->name('Loai-San-Pham');
		Route::get('/Show-San-Pham/{id}','PageController@showSanPham')->name('ShowSP');
		Route::get('/Lien-He','PageController@LienHe')->name('Lien-He');
		Route::get('/Gioi-Thieu','PageController@GioiThieu')->name('Gioi-Thieu');
		Route::get('/Tìm-kiếm','PageController@search')->name('search');
	});
	Route::group(['prefix'=>'login'],function(){
		Route::get('/login','LoginController@login')->name('Login');
		Route::post('/login','LoginController@postlogin')->name('PostLogin');
		Route::get('/register','LoginController@register')->name('Register');
		Route::post('/register','LoginController@postregister')->name('PostRegister');
		Route::get('/logout','LoginController@logout')->name('Logout');
		Route::get('/user','LoginController@show')->name('User1');
	});
	Route::group(['prefix'=>'actionproduct'],function(){
		Route::get('/create','ActionController@create')->name('Create');
		Route::post('/create','ActionController@postcreate')->name('PostCreate');
		Route::get('/List','ActionController@list')->name('list');
		Route::get('/edit/{id}','ActionController@edit')->name('edit');
		Route::post('/update/{id}','ActionController@update')->name('update');
		Route::get('/delete/{id}','ActionController@destroy')->name('delete');
	});
	Route::group(['prefix'=>'actionslide'],function(){
		Route::get('/create','slideController@create')->name('CreateSlide');
		Route::post('/create','slideController@postcreate')->name('PostSlide');
		Route::get('/Listslide','slideController@list')->name('listslide');
		Route::get('/editslide/{id}','slideController@edit')->name('editslide');
		Route::post('/updateslide/{id}','slideController@update')->name('updateslide');
		Route::get('/deletetslide/{id}','slideController@destroy')->name('deleteslide');
	});
	Route::group(['prefix'=>'actiontype'],function(){
		Route::get('/create','typeController@create')->name('CreateType');
		Route::post('/create','typeController@postcreate')->name('PostType');
		Route::get('/ListType','typeController@list')->name('listType');
		Route::get('/editType/{id}','typeController@edit')->name('editType');
		Route::post('/updateType/{id}','typeController@update')->name('updateType');
		Route::get('/deletetType/{id}','typeController@destroy')->name('deleteType');
	});
});