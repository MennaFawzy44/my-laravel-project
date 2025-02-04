<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;

// Authentication Routes
Auth::routes();

// Home Route
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Post Resource Routes
Route::resource('posts', PostController::class)->middleware('auth');

// Default Route (Home Page)
Route::get('/', [PostController::class, 'index'])->name('posts.index');