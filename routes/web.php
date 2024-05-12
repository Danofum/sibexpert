<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', \App\Http\Controllers\Pages\MainPageController::class)->name('main');

Route::middleware('auth')->group(function () {
    Route::name('user.')->group(function () {
        Route::get('/log-out', \App\Http\Controllers\User\LogOutController::class)->name('log-out');
        Route::get('/profile', \App\Http\Controllers\Pages\User\ProfileController::class)->name('profile');
    });

    Route::name('order.')->group(function () {
       Route::post('/order', \App\Http\Controllers\Order\StoreController::class)->name('store');
    });
});

Route::middleware('guest')->group(function () {
    Route::name('user.')->group(function () {
        Route::get('/login', \App\Http\Controllers\Pages\User\LoginController::class)->name('login');
        Route::post('/login', \App\Http\Controllers\User\AuthController::class)->name('auth');

        Route::get('/register', \App\Http\Controllers\Pages\User\RegisterController::class)->name('register');
        Route::post('/register', \App\Http\Controllers\User\RegisterController::class)->name('store');
    });
});

