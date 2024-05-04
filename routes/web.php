<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StartController;
use App\Http\Controllers\UserController;

Route::get('/', [StartController::class, 'start']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'cadastrar']);
Route::get('/recover', [UserController::class, 'recoverpassword']);
Route::get('/recover/password', [UserController::class, 'newpassword']);
