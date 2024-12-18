<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/history', 'history')->name('history');
Route::view('/profile', 'profile')->name('profile');
Route::view('/edit', 'edit')->name('edit');


Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');