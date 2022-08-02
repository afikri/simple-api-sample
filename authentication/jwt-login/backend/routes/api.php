<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * route "/register"
 * @method "POST"
 */
Route::post('/register', App\Http\Controllers\API\RegisterController::class)->name('register');

/**
 * route "/login"
 * @method "POST"
 */
Route::post('/login', App\Http\Controllers\API\LoginController::class)->name('login');

/**
 * route "/logout"
 * @method "POST"
 */
Route::post('/logout', App\Http\Controllers\API\LogoutController::class)->name('logout');
