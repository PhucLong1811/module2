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
Route::get('/greeting', function () {
	echo 'Hello World!';
});
Route::get('/login', function () {
	return view('login');
});
Route::post('/login', function (Illuminate\Http\Request $request) {
	if ($request->username == NULL
		&& $request->password == NULL) {
		return view('welcome_admin');
}


});