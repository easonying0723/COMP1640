<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function check(Request $request){
        return $request ->input();
        //validate
         $request->validate([
             'uname'=>'required',
             'password' =>'required|min:5|max:12'
         ]);
        
    }
    function login(){
        return view('auth.login');
        
    }
}
