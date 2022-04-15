<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\View;

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
    return view('auth/login');
});

// Route::get('login', function () {
//     return view('login');
// });

// Route::get('homepage', function () {
//     return view('homepage');
// });

//  Route::get('login', function () {
//      return view('login');
//  });

// Route::get('usercontrol', function () {
//     return view('usercontrol');
// });

Route::post('/auth/check',[MainController::class, 'check'])->name('auth.check');

Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');

//===============-store page in this group to prevent page access without logging in==============
Route::group(['middleware'=>['AuthCheck']], function(){ 
Route::get('/auth/login',[MainController::class, 'login'])->name('auth.login');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/usercontrol', [MainController::class, 'usercontrol'])->name('usercontrol'); 

Route::get('/profile', [MainController::class, 'profile'])->name('profile');

Route::get('/homepage', [HomeController::class, 'index'])->name('home');

Route::get('terms', function () {
    return view('terms');
});

Route::post('profile/changePassword', [MainController::class, 'changePassword'])->name('profile.changePassword');

Route::post('profile/updateprofilepic', [MainController::class, 'updateprofilepic'])->name('profile.updateprofilepic');

Route::get('/homepage/liked/{id}', [HomeController::class, 'liked'])->name('homepage.liked');
Route::get('/homepage/disliked/{id}',[HomeController::class, 'disliked'])->name('homepage.disliked');

Route::post('/homepage/idea/store', [HomeController::class, 'store_idea']);

Route::get('homepage/idea_details/{id}', [HomeController::class, 'idea_details'])->name('homepage.idea_details');
Route::get('homepage/comment_details/{id}', [HomeController::class, 'comment_details'])->name('homepage.comment_details');

Route::post('/homepage/store_comment/{id}',[HomeController::class, 'store_comment'])->name('homepage.store_comment');

Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');

Route::get('/a','MainController@save');//email retrieve data
Route::get('/b','HomeController@store_idea');//email retrieve data
Route::get('/c','HomeController@store_comment');//email retrieve data

Route::post('/homepage/category/stored',[HomeController::class,'category_store']);

Route::get('/delete/{id}',[HomeController::class,'category_delete']);

 });