<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Symfony\Component\HttpKernel\Profiler\Profile;

Route::get('/', [StartController::class, 'start']);

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

/* Profile */

Route::get('/profile', [ProfileController::class, 'profile'])->name('user.profile');

/* Book store */
Route::get('/book-store', [BookController::class, 'index'])->name('book.form');
Route::post('/book-store', [BookController::class, 'store'])->name('book.store');
