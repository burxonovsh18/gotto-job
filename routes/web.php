<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;


Route::get('/', [HomeController::class, 'index']);

Route::prefix('job')->group(function(){
    Route::get('/', [JobController::class, 'index']);
    Route::get('{job}', [JobController::class, 'show']);
});


Route::get('/login', [AuthController::class, 'loginForm'])->name('loginForm');
Route::get('/register', [AuthController::class, 'registerForm'])->name('registerForm');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
