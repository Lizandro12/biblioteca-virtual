<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', [StartController::class, 'start']);

/* Auth */
Route::get('/login', [UserController::class, 'login'])->middleware('guest')->name('login');
Route::post('/login', [UserController::class, 'auth'])->middleware('guest')->name('user.auth');
Route::get('/register', [UserController::class, 'cadastrar'])->middleware('guest');
Route::post('/store', [UserController::class, 'store'])->middleware('guest')->name('user.store');
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth')->name('user.logout');

/* Reset Password */
Route::get('/forgot-password', [UserController::class, 'forgotpassword'])->middleware('guest')->name('password.request');
Route::post('/forgot-password', [UserController::class, 'resetemail'])->middleware('guest')->name('password.email');
Route::get('/reset-password/{token}', [UserController::class, 'newpassword'])->middleware('guest')->name('password.reset');
Route::post('/reset-password', [UserController::class, 'updatepassword'])->middleware('guest')->name('password.update');

/* Profile */
Route::get('/profile', [ProfileController::class, 'profile'])->middleware('auth')->name('user.profile');

Route::post('/profile', [ProfileController::class, 'update'])->middleware('auth')->name('update.profile');

/* Book store */
Route::get('/book-store', [BookController::class, 'index'])->middleware('auth')->name('book.form');
Route::post('/book-store', [BookController::class, 'store'])->middleware('auth')->name('book.store');
