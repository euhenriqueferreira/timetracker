<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TaskController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\GuestMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(AuthMiddleware::class)->group(function(){
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // ------------------------------------------------------------------
    
    // Tags
    Route::get('/tags/create', [TagController::class, 'create'])->name('tags.create');
    Route::post('/tags/create', [TagController::class, 'store']);
    
    Route::get('/tags/{tag}/delete', [TagController::class, 'destroy'])->name('tags.delete');
    // ------------------------------------------------------------------
    
    // Tasks
    Route::post('/tasks/create', [TaskController::class, 'store'])->name('tasks.create');
    
    Route::get('/tasks/{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::put('/tasks/{task}/edit', [TaskController::class, 'update']);
    Route::delete('/tasks/{task}/delete', [TaskController::class, 'destroy'])->name('tasks.delete');
    // ------------------------------------------------------------------

    Route::view('/history', 'history')->name('history');
    Route::view('/profile', 'profile')->name('profile');
    // Route::view('/edit', 'edit')->name('edit');
});

Route::middleware(GuestMiddleware::class)->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register']);
});