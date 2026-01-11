<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index');
Route::view('/about', 'pages.about');
Route::view('/contact', 'pages.contact');
Route::view('/jobs', 'pages.job-listings');
Route::view('/jobs/{id}', 'pages.job-details');
