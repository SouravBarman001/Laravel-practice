<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('hello');
});
Route::get('/welcome', function () {
    return view('welcome');
});

Route::Get('/about', function(){
    return view('about');
});
Route::Get('/home', function(){
    return view('home');
});

// Route::view('header', 'components.header');
// Route::get("user",[UserController::class,'show']);
Route::get("/users/{v}",[UserController::class,'loadView']);
