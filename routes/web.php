<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StartController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\UserController;

Route::get('/', [StartController::class, 'start']);


Route::get('/search', [SearchController::class, 'search']);
Route::get('/authorpage', [SearchController::class, 'authorpage']);
Route::get('/categorypage', [SearchController::class, 'categorypage']);


/* Auth */
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'auth'])->name('user.auth');
Route::get('/register', [UserController::class, 'cadastrar']);
Route::post('/store', [UserController::class, 'store'])->name('user.store');
Route::post('/logout', [UserController::class, 'logout'])->name('user.logout');

/* Reset Password */
Route::get('/forgot-password', [UserController::class, 'forgotpassword'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [UserController::class, 'resetemail'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [UserController::class, 'newpassword'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [UserController::class, 'updatepassword'])->middleware('guest')->name('password.update');
