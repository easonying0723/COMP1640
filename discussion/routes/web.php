<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
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


Route::get('/', function () {
    return view('terms');
});

Route::get('profile', function () {
    return view('profile');
});

// Route::get('login', function () {
//     return view('login');
// });


Route::get('usercontrol', function () {
    return view('usercontrol');
});

Route::get('usercontrol', function () {
    return view('usercontrol');
});

Route::get('/homepage', [HomeController::class, 'index'])->name('home');
Route::post('/homepage/idea/store', [HomeController::class, 'store_idea']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/usercontrol', [MainController::class, 'usercontrol'])->name('usercontrol');

Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');

Route::get('sidebar', function () {
    return view('sidebar');
});
Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');

 Route::group(['middleware'=>['AuthCheck']], function(){ //store page in this group to prevent page access without logging in
     Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');

 });

