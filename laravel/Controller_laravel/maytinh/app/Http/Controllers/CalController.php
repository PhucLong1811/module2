<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalController extends Controller
{
	function index(Request $request){
		$num1 = $request->num1;
		$num2 = $request->num2;
		$value = $request->value;
		$result =0;
		if ($value == "cong"){
			$result = $num1 + $num2;
		} else if ($value == "tru"){
			$result = $num1 - $num2;
		} else if ($value == "nhan"){
			$result = $num1 * $num2;
		} else if ($value == "chia"){
			$result = $num1 / $num2;
		}

		return view('index', compact('result'));
	}

}