<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * 
 * Route "/Register"
 * @method "POST"
 * 
 */
Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');

/**
 * 
 * Route "/Login"
 * @method "POST"
 * 
 */
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');

/**
 * 
 * route "/user
 * @method "GET"
 * 
 */
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * route "/Logout
 * @method "POST"
 * 
 */
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');
