<?php
use App\Http\Controllers\FormController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginExample;
use App\Http\Controllers\databaseController;
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

// Route::get('/', function () {
//     return view('hello');
// });
// Route::get('/welcome', function () {
//     return view('welcome');
// });

// Route::Get('/about', function(){
//     return view('about');
// });




// Route::Get('/hello', function(){
//     return view('hello');
// });

// Route::view("hi","hello");



// Route::view('header', 'components.header');
// Route::get("user",[UserController::class,'show']);
//  Route::get("/users",[UserController::class,'index']);

// Route::post("/loginExample",[LoginExample::class,'getData']);

// Route::view("login","loginExample");

// Route::view("access","access");
// Route::view("nonaccess","nonaccess");

// Route::get("datatest",[databaseController::class,'index']);
Route::post("submit",[FormController::class,"testRequest"]);
Route::view("login","form"); 