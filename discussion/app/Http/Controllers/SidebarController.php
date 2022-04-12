<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Sidebar extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ['LoggedUserInfo'=>User::where('id','=', session('LoggedUser'))->first()];

        return view('dashboard', $data);
    }
}
