<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'home']);

Route::get('/jobs', [BlogController::class, 'jobs']);
Route::get('/jobs/{id}', [BlogController::class, 'showJob']);

Route::get('/blogs', [BlogController::class, 'blogs']);
Route::get('/blogs/{id}', [BlogController::class, 'showBlog']);

Route::get('/about', [BlogController::class, 'about']);

Route::get('/contact', [BlogController::class, 'contact']);
