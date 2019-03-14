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


Route::group(['prefix' => 'customers'], function () {
	Route::get("/","testing@index")->name('customers.index'); 

	Route::get("create", "testing@create")->name('customers.create');

	Route::post("store", "testing@store")->name('customers.store');

	Route::get("show/{id}","testing@show")->name('customers.show');
	
	Route::get("edit/{id}","testing@edit")->name('customers.edit');

	Route::post("update/{id}","testing@update")->name('customers.update');

	Route::get("delete/{id}","testing@destroy")->name('customers.destroy');
});