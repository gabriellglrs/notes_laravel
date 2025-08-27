<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Middleware\CheckIsLogged;
use App\Http\Middleware\CheckIsNotLogged;

// Auth Routes - usuario nao logado
Route::middleware([CheckIsNotLogged::class])->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/loginSubmit', [AuthController::class, 'loginSubmit'])->name('loginSubmit');
});

// Main Routes - usuario logado
Route::middleware([CheckIsLogged::class])->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/newNote', [MainController::class, 'newNote'])->name('new');
    Route::get('/editNote/{uuid}', [MainController::class,'editNote'])->name('editNote');
    Route::delete('/deleteNote/{uuid}', [MainController::class,'deleteNote'])->name('deleteNote');
});
