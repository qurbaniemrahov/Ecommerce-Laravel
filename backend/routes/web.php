<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Ecommerce/index');
});

Route::get('/admin', function () {
    return view('Admin/index');
});

Route::get('/login', function () {
    return view('Login/index');
});

