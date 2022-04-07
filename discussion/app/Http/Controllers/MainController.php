<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }

    function usercontrol(){
        return view('usercontrol');
    }

    function save(Request $request){

        // //Validate requests
         $request->validate([
             'name'=>'required',
             'email'=>'required|email|unique:users',
             'password'=>'required|min:5|max:12',
             
         ]);

        

          //Insert data into database
          $users = new User;
          $users->name = $request->name;
          $users->email = $request->email;
          $users->password = Hash::make($request->password);
          $users->department = $request->department;
          $users->position = $request ->position;
          $save = $users->save();
          if($save){
             return back()->with('success','New user has been successfuly added to database');
          }else{
              return back()->with('fail','Something went wrong, try again later');
          }
         
    }

     function check(Request $request){
         //Validate requests
         $request->validate([
              'email'=>'required|email',
              'password'=>'required|min:5|max:12'
         ]);
         $userInfo = User::where('email','=', $request->email)->first();
         if(!$userInfo){
             return back()->with('fail','We do not recognize your email address');
         }else{
             //check password
             if(Hash::check($request->password, $userInfo->password)){
                 $request->session()->put('LoggedUser', $userInfo->id);
                 //echo session('LoggedUser');
                 return redirect('dashboard');
                 
             }else{
                 return back()->with('fail','Incorrect password');
             }
         }
        }
     function logout(){
         if(session()->has('LoggedUser')){
             session()->pull('LoggedUser');
             return redirect('/auth/login');
         }
     }

    //     function settings(){
    //         $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
    //         return view('users.settings', $data);
    //     }
    
    //     function profile(){
    //         $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
    //         return view('users.profile', $data);
    //     }
    //     function staff(){
    //         $data = ['LoggedUserInfo'=>Admin::where('id','=', session('LoggedUser'))->first()];
    //         return view('users.staff', $data);
    //     }
    // }
}
