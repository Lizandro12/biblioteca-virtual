<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StartController;
use App\Http\Controllers\UserController;

Route::get('/', [StartController::class, 'start']);

Route::get('/login', [UserController::class, 'login']);

Route::get('/cadastrar', [UserController::class, 'cadastrar']);
