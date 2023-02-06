<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index']);
Route::get('/exit', [\App\Http\Controllers\SiteController::class, 'exit']);
Route::get('/users/{qty}', [\App\Http\Controllers\SiteController::class, 'users']);
Route::get('/posts/create/', [\App\Http\Controllers\PostController::class, 'create']);
Route::get('/posts/read/', [\App\Http\Controllers\PostController::class, 'read']);
Route::get('/posts/read_all/', [\App\Http\Controllers\PostController::class, 'readAll']);




