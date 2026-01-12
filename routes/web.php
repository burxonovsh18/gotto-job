<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/job', [JobController::class, 'index'])->name('jobs.index');
Route::get('/job', [JobController::class, 'show'])->name('jobs.show');
Route::get('/contact', [ContactController::class, 'index']);
