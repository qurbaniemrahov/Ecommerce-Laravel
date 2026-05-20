<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.home');
});

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::view('/', 'admin.dashboard')->name('dashboard');
    Route::view('/login', 'admin.auth.login')->name('login');
    Route::view('/register', 'admin.auth.register')->name('register');
});
