<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;

// Auth Routes - usuario nao logado
Route::middleware([CheckIsNotLogged::class])->group(function () {
    Route::get('/login', [AuthController::class, 'login']);
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit']);
});

// Main Routes - usuario logado
Route::middleware([CheckIsLogged::class])->group(function () {
    Route::get('/', [MainController::class, 'index']);
    Route::get('/teste', [MainController::class, 'teste']);
    Route::get('/logout', [AuthController::class, 'logout']);
});
