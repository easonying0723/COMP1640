<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/auth/login', [MainController::class,'login'])->name('auth.login'); //view at main controller
Route::post('/auth/check', [MainController::class,'check'])->name('auth.check'); //view at main controller


