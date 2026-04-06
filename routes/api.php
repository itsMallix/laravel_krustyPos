<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::name('api.')->group(function (){
    
    Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);

    Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');

    Route::apiResource('/products', App\Http\Controllers\Api\ProductController::class)->middleware('auth:sanctum');

    Route::apiResource('/categories', App\Http\Controllers\Api\CategoryController::class)->middleware('auth:sanctum');
});

