<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckIsLogged;

// Auth Routes
Route::get('/login', [AuthController::class, 'login']);
Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);

Route::middleware([CheckIsLogged::class])->group(function () {
    Route::get('/', [MainController::class, 'index']);
    Route::get('/teste', [MainController::class,'teste']);
    Route::get('/logout', [AuthController::class, 'logout']);
});
