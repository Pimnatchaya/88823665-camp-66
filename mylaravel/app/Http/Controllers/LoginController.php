<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
class LoginController extends Controller
{
    //
    function index(){
        return view('login');
    }
    function login(Request $req){
        //print_r(req->input());
        $user = User::where('email', $req->email)->first();
        print_r($user)
    }
}
