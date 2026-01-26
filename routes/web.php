<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use PHPUnit\Framework\Attributes\Group;



Route::get('/', [AuthController::class, 'loginForm'])->name('loginForm');
Route::get('/register', [AuthController::class, 'registerForm'])->name('registerForm');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/about', function(){
    return view('pages.about');
})->middleware('admin');
Route::get('contact', function(){
    return view('pages.contact');
})->middleware('admin');
Route::get('/jobs', [JobController::class , 'index'])->name('jobs')->middleware('admin');
Route::get('/jobs/show', [JobController::class, 'show'])->name('jobs.show')->middleware('admin');
Route::get('/jobs/create', [JobController::class ,'create'])->name('jobs.create')->middleware('admin');
Route::post('jobs/store', [JobController::class, 'store'])->name('jobs.store')->middleware('admin');
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('admin');
Route::get('/profile/settings', [ProfileController::class, 'settings'])->name('profile.settings')->middleware('admin');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index')->middleware('admin');
Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('admin');
Route::post('/edit', [ProfileController::class, 'update'])->name('profile.update')->middleware('admin');


