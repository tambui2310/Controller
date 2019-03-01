<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
	public function phepTinh(Request $request)
	{
		$number1 = $request->number1;
		$number2 = $request->number2;
		$result = $request->pheptinh;

		switch ($result) {
			case '+':
				$result = $number1 + $number2;
				
				break;
			case '-':
				$result = $number1 - $number2;
				
				break;
			case '*':
				$result = $number1 * $number2;
		
				break;
			case '/':
			if ($number2 != 0) {
				$result = $number1 / $number2;
			}
			else echo "Mẫu phải khác 0";
				break;
		}
			return view('index', compact(['number1','number2','result']));
	}
}
