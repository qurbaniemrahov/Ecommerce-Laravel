<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/login', function () {
    return view('pages.Login.index');
});

Route::get('/dashboard', function () {
    return view('pages.Admin.public.index');
});
