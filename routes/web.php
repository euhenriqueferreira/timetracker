<?php

use App\Http\Controllers\LoginController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\GuestMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(AuthMiddleware::class)->group(function(){
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::view('/history', 'history')->name('history');
    Route::view('/profile', 'profile')->name('profile');
    Route::view('/edit', 'edit')->name('edit');
});

Route::middleware(GuestMiddleware::class)->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    
    Route::view('/register', 'auth.register')->name('register');
});