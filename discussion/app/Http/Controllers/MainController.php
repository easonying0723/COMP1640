<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\ContactMe;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    function login(){
        return view('auth.login');
    }


    function usercontrol(){
        $udata = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];// pass to sidebar
        $users = User::all();

        return view('usercontrol',['users' => $users],$udata);
    }

    function profile(Request $request){
        $udata = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];// pass to sidebar
        $user_id = (int)$request->session()->get('LoggedUser');
        $users =  User::where('id','=', $user_id)->get();
        return view('profile',['users' => $users],$udata);
    }
    function updateprofilepic(Request $request){
        $image = '';
        if ($request->hasFile('img')) {
            $file = $request->image;
            $image = date('YmdHis') . '.' . $file[0]->getClientOriginalExtension();
            $file[0]->move('images/', $image);
        }

        dd(strval($image));
        
        $user_id = (int)$request->session()->get('LoggedUser');
        $update = User::where('id','=',$user_id)->update(['profilepic'=>strval($image)]);
        if($update){
            return back()->with('success','Profile picture changed successfully.');
        }
        else{
            return back()->with('fail','Profile picture change failed.');
        }
    }



    //user control
    public function userChangeStatus(Request $request, $id)
    {
        $user = User::select('status')->where('id','=', $id)->first();
         
        if($user->status =='1'){
            $status = '0';
        }
        else{
            $status = '1';
        }
        $values = array('status'=>$status);
        $update = User::where('id', $id)->update($values);

        if($update){
            return back()->with('success','Status changed successfully.');
        }
        else{
            return back()->with('fail','Status change failed.');
        }
    }

    function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect('usercontrol');
    }


    function save(Request $request){

        // //Validate requests
         $request->validate([
             'name'=>'required',
             'email'=>'required|email|unique:users',
             'password'=>'required|min:5|max:12',
             
         ]);

          $data=$request->all();
          Mail::to(request('email'))->send(new ContactMe($data));

          //default value
          $profilepic = 'ironman.png';
          $status = 1;
          
          //Insert data into database
          $users = new User;
          $users->name = $request->name;
          $users->email = $request->email;
          $users->password = Hash::make($request->password);
          $users->department = $request->department;
          $users->profilepic = $profilepic;
          $users->position = $request ->position;
          $users->status = $status;

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
        $statusCheck = User::select('status')->where('email','=',  $request->email)->first();

        if($statusCheck->status == '0'){
            return back()->with('fail','your account has been disabled');
        }
        else{
            $userInfo = User::where('email','=', $request->email)->first();
            if(!$userInfo){
                return back()->with('fail','We do not recognize your email address');
            }else{
                //check password
                if(Hash::check($request->password, $userInfo->password)){
                    $request->session()->put('LoggedUser', $userInfo->id);
                    //echo session('LoggedUser');
                    return redirect('homepage');   
                }else{
                    return back()->with('fail','Incorrect password');
                }
            }
        }

    }

    function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }
    function changePassword(Request $request){
            $request->validate([
                'currentpw'=>['required'],
                'newpw'=>['required'],
                'confirmpw'=>['same:newpw'],
            ]);
            $user_id = (int)$request->session()->get('LoggedUser');
            $userInfo = User::where('id','=', $user_id)->first();

            //check if password matches with current password
            if(Hash::check($request->currentpw, $userInfo->password)){
                $update= User::where('id','=',$user_id)->update(['password'=> Hash::make($request->newpw)]);
                if($update){
                    return back()->with('success','Password changed successfully.');
                }
                else{
                    return back()->with('fail','Password change failed.');
                }
            }
            else{
                return back()->with('fail','Your current password does not match');
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