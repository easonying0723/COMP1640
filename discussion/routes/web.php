<?php

use Illuminate\Support\Facades\Route;

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

Route::get('usercontrol', function () {
    return view('usercontrol');
});

Route::get('homepage', function () {
    return view('homepage');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('sidebar', function () {
    return view('sidebar');
});

