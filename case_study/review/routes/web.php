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
Route::group(['prefix'=>'user'],function(){
	Route::group(['prefix'=>'page'],function(){
		Route::get('/home','pageController@index')->name('home');
	});
	
});
Route::group(['prefix'=>'admin'],function(){
	Route::group(['prefix'=>'page'],function(){
		Route::get('/home','pageController@homeadmin')->name('homeadmin');
	});
	Route::group(['prefix'=>'slider'],function(){
		Route::get('/create','sliderController@createSlide')->name('crSlide');
		Route::post('/create','sliderController@postSlide')->name('postSlide');
		Route::get('/list','sliderController@listSlide')->name('list.Slide');
	});
	Route::group(['prefix'=>'slider'],function(){
		Route::get('create','loginController@createLogin')->name('crLogin');
	});
});
