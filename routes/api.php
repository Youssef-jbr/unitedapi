<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/');
Route::group(['prefix' => 'auth'], function () {
    Route::post('/register', [AuthenticationController::class, 'register'])->name('auth.register');
    Route::post('/login', [AuthenticationController::class, 'login'])->name('auth.login');
    Route::post('/logout', [AuthenticationController::class, 'logout'])->name('auth.logout')->middleware('auth');
    Route::get('/me', [AuthenticationController::class, 'me'])->name('auth.me')->middleware('auth');
});
