<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;

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
    // return view('welcome');
    return redirect('/login');
});

// "login" é o /login
// "user" é o nome do arquivo .../resources/views/user.blade.php
Route::view("login", "user");
Route::view("movie", "movieslist");
Route::view("addmovie", "addmovie");

//  /user
Route::post("user", [UserController::class, 'login']);

//  /movie
Route::get("movie", [MovieController::class,'indexweb']);
Route::post("movie", [MovieController::class, 'store']);
