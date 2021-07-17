<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;



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

/*
* Usando Middleware para proteger rotas no jwt.auth:
* Route::get('rota', [Classe, 'recurso'])->middleware('jwt.auth');
*/

/** AUTH */
Route::post('auth/login', [AuthController::class, 'login']);
Route::post('auth/logout', [AuthController::class, 'logout']);
Route::post('auth/refresh', [AuthController::class, 'refresh']);
Route::post('auth/me', [AuthController::class, 'me']);

// Route::get('user', [UserController::class, 'show']);
// Route::post('login', [UserController::class, 'login']);

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

/** MOVIES */
// List movies
// Versão com o middleware exige autenticação:
// Route::get('movie', [MovieController::class, 'index'])->middleware('jwt.auth');
Route::get('movie', [MovieController::class, 'index']);

// List one movie
Route::get('movie/{id}', [MovieController::class, 'show']);

// Create new movie
Route::post('movie', [MovieController::class, 'store']);

// Update movie
Route::put('movie/{id}', [MovieController::class, 'update']);

// Delete movie
Route::delete('movie/{id}', [MovieController::class, 'destroy']);

