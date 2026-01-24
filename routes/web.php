<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/jobs', [JobController::class , 'index'])->name('jobs');
Route::get('/jobs/show', [JobController::class, 'show'])->name('jobs.show');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [AuthController::class, 'loginForm'])->name('loginForm');
Route::get('/register', [AuthController::class, 'registerForm'])->name('registerForm');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/profile/settings', [ProfileController::class, 'settings'])->name('profile.settings');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/edit', [ProfileController::class, 'update'])->name('profile.update');


