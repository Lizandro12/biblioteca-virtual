<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CadastrarController;

Route::get('/', [StartController::class, 'start']);

Route::get('/login', [LoginController::class, 'login']);

Route::get('/cadastrar', [CadastrarController::class, 'cadastrar']);
