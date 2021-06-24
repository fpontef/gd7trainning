<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('/v1', function(){
//     return ['status' => true ];
// });

// Obs: https://stackoverflow.com/questions/63807930/target-class-controller-does-not-exist-laravel-8

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
