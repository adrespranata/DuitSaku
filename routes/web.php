<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/', function () {
    return Inertia::render('Auth/Login');
})->middleware('guest')->name('login');

Route::get('/signup', function () {
    return inertia('Auth/SignUp');
})->middleware('guest')->name('signup');
