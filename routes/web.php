<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('home', function () {
    return view('pages.dashboard');
    })->name('home');

    Route::resource('user', UserController::class);

    Route::resource('category', CategoryController::class);

    Route::resource('product', ProductController::class);
});

