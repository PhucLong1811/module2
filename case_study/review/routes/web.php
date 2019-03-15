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
Route::get('/','pageController@index')->name('home');
Route::group(['prefix'=>'user'],function(){
	Route::group(['prefix'=>'page'],function(){
		
	});
	
});
/*Route::group(['middleware'=>'auth'],function(){*/
	Route::group(['prefix'=>'admin'],function(){
		Route::group(['prefix'=>'page'],function(){
			Route::get('/home','pageController@homeadmin')->name('homeadmin');
		});
		Route::group(['prefix'=>'slider'],function(){
			Route::get('/create','sliderController@createSlide')->name('create.Slide');
			Route::post('/create','sliderController@postSlide')->name('post.Slide');
			Route::get('/list','sliderController@listSlide')->name('list.Slide');
		});
		Route::group(['prefix'=>'register'],function(){
			Route::get('/create','registerController@createRegister')->name('create.Register');
			Route::post('/postcreate','registerController@postRegister')->name('post.Register');
			Route::get('/list','registerController@listRegister')->name('list.Register');
			Route::get('edit/{id}','registerController@editRegister')->name('edit.Register');
			Route::post('update/{id}','registerController@updateRegister')->name('update.Register');
			Route::get('delete/{id}','registerController@deleteRegister')->name('delete.Register');
		});
		Route::group(['prefix'=>'login'],function(){
			Route::get('login','registerController@Login')->name('Login');
			Route::post('/postLogin','registerController@postLogin')->name('post.Login');
			Route::get('logout','registerController@Logout')->name('Logout');
		});
	});
/*});*/
