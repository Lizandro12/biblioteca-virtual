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
Route::get('profile/account-details', [ProfileController::class, 'accountdetails'])->middleware('auth')->name('accountdetails.profile');
Route::put('profile/account-details', [ProfileController::class, 'updateaccountdetails'])->middleware('auth')->name('updateaccountdetails.profile');


/* Book store */
Route::get('profile/catalog-books', [BookController::class, 'catalogbooks'])->middleware('auth')->name('catalogbooks.profile');
Route::post('profile/catalog-books', [BookController::class, 'storecatalogbooks'])->middleware('auth')->name('storecatalogbooks.profile');
Route::get('/book-authors', [BookController::class, 'authors'])->middleware('auth')->name('authors.form');
Route::post('/book-authors', [BookController::class, 'registerauthors'])->middleware('auth')->name('registerauthors.store');
