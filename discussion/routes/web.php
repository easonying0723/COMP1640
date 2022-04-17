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

Route::get('/homepage/export_data',[HomeController::class, 'export_data'])->name('export_data'); //dont move this
Route::get('/homepage/export_file',[HomeController::class, 'export_file'])->name('export_file'); //dont move this

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


Route::get('/usercontrol/delete/{id}',[MainController::class, 'delete'])->name('usercontrol.delete');
Route::get('/userChangeStatus/{id}',[MainController::class, 'userChangeStatus'])->name('userChangeStatus');


Route::post('profile/changePassword', [MainController::class, 'changePassword'])->name('profile.changePassword');

Route::post('profile/updateprofilepic', [MainController::class, 'updateprofilepic'])->name('profile.updateprofilepic');

Route::get('/homepage/liked/{id}', [HomeController::class, 'liked'])->name('homepage.liked');
Route::get('/homepage/disliked/{id}',[HomeController::class, 'disliked'])->name('homepage.disliked');

Route::post('/homepage/idea/store', [HomeController::class, 'store_idea']);

Route::get('homepage/idea_details/{id}', [HomeController::class, 'idea_details'])->name('homepage.idea_details');
Route::get('homepage/comment_details/{id}', [HomeController::class, 'comment_details'])->name('homepage.comment_details');

Route::post('/homepage/store_comment/{id}',[HomeController::class, 'store_comment'])->name('homepage.store_comment');

Route::post('/homepage/closure_date',[HomeController::class, 'store_closure_date'])->name('homepage.store_closure_date');

Route::post('/auth/save',[MainController::class, 'save'])->name('auth.save');
Route::get('/auth/logout',[MainController::class, 'logout'])->name('auth.logout');

Route::get('/a','MainController@save');//email retrieve data
Route::get('/b','HomeController@store_idea');//email retrieve data
Route::get('/c','HomeController@store_comment');//email retrieve data

Route::post('/homepage/category/stored',[HomeController::class,'category_store']);


Route::get('/homepage/search',[HomeController::class,'category_search']);



//Route::get('/delete/{id}',[HomeController::class,'category_delete']);
Route::post('/homepage/title/stored',[HomeController::class,'title_store']);
Route::get('/homepage/view',[HomeController::class,'titleIndex']);
Route::get('/deletecategory/{id}',[HomeController::class,'category_delete']);
Route::get('/deletetitle/{title_id}',[HomeController::class,'title_delete']);

 });