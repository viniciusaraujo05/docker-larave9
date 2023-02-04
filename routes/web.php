<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index']);
Route::get('/exit', [\App\Http\Controllers\SiteController::class, 'exit']);
Route::get('/users/{qty}', [\App\Http\Controllers\SiteController::class, 'users']);


