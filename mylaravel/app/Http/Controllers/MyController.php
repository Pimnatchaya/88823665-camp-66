<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    function myfunction( Request $request){
        $input = $request->input('number',1);
        $multiplication_table = [];
        for ($i = 1; $i <= 12; $i++) {
        $multiplication_table[] = $input*$i;   
        }
    
        return view('myview',$multiplication_table, ['number' => $input, 'multiplication_table' => $multiplication_table]);
    }
}