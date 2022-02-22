<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

	public function add(Request $request) { 

		$nummer1 = $request->number1;
		$nummer2 = $request->number2;

		if(is_numeric($request->number1) && is_numeric($request->number2)) {

			$calculate = $request->number1 + $request->number2;

		}else {
		
		$calculate;	

	}
	return view('calculator')->with(compact('calculate'));
}
}
