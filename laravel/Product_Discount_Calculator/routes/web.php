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
Route::get('/calculator', function (){
	return view ('calculator');

});
Route::post('/calculator', function (Illuminate\Http\Request $request){
	$productDescription = $request->description;
	$price = $request->price;
	$discountPercent = $request->discount_percent;
	$discountAmount = $price * $discountPercent * 0.1;
	$discountPrice = $price - $discountAmount;
	
	return view('calculator_error', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
});
/*Từ điển*/
Route::get('/dictionary', function (){
	return view ('dictionary');

});
Route::post('/dictionary', function (Illuminate\Http\Request $request){
	$eng = $request->eng;
	$nghia = "";
	$dictionary = array("hello"=>"xin chao", "music"=>"nhac","guide"=>"huong dan");
	foreach($dictionary as $key => $value){
		if ($eng == $key) {
			$nghia = $value;
		}else{
			return $result = 'tự tìm google dịch đi';
		}
	}

	return view('dictionary_result', compact(['nghia','eng']));
});