<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AuthController;

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
Broadcast::routes(['middleware' => 'web']);

// Route::middleware('auth:web-admin')->get('/user', function (Request $request) {
//     return $request->user();
// });

/* DASHBOARD */
Route::get('/session', function () {
     return session()->all();
});

/* DASHBOARD */
Route::get('/', function () {
    return view('dashboard');
});

/* AUTENTICACAO */
Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post('auth/login', [AuthController::class, 'login']);

Route::view("login", "login");

Route::group(['middleware' => 'web-admin'], function() {

    /*
    * Route::view("url_path", "viewname");
    * url_path = /url_path
    * viewname = .../resources/views/viewname.blade.php
    */
    Route::view("movie", "movielist");
    Route::view("addmovie", "addmovie");
    Route::view("user", "userlist");
    Route::view("adduser", "adduser");

    /** USERS */
    // List users
    Route::get('user', [UserController::class, 'index']);

    // List one user
    Route::get('user/{id}', [UserController::class, 'show']);

    // Create new user
    Route::post('user', [UserController::class, 'store']);

    // Update user
    Route::put('user/{id}', [UserController::class, 'update']);

    // Delete user
    Route::delete('user/{id}', [UserController::class, 'destroy']);

    // Route::post('auth/logout', [AuthController::class, 'logout']);
    // Route::post('auth/refresh', [AuthController::class, 'refresh']);
    // Route::post('auth/me', [AuthController::class, 'me']);

    /** MOVIES */
    // List movies
    Route::get('movie', [MovieController::class, 'index']);

    // List one movie
    Route::get('movie/{id}', [MovieController::class, 'show']);

    // Create new movie
    Route::post('movie', [MovieController::class, 'store']);

    // Update movie
    Route::put('movie/{id}', [MovieController::class, 'update']);

    // Delete movie
    Route::delete('movie/{id}', [MovieController::class, 'destroy']);

});
