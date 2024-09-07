<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthorController;



Route::get('/', [PagesController::class, 'home']);

Route::get('/jobs', [PagesController::class, 'jobs']);
Route::get('/jobs/{id}', [PagesController::class, 'showJob']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/contact', [PagesController::class, 'contact']);

Route::resource('blogs', BlogController::class);

Route::resource('categories', CategoryController::class);

Route::resource('authors', AuthorController::class);


