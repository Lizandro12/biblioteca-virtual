<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;

Route::get('/', [StartController::class, 'start']);
Route::get('/search', [StartController::class, 'search']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/cadastrar', [UserController::class, 'cadastrar']);
Route::get('/recover', [UserController::class, 'recoverpassword']);
Route::get('/recover/password', [UserController::class, 'newpassword']);

