<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', [MainController::class, 'sobre']);

Route::get('/contato', [MainController::class, 'contato']);
