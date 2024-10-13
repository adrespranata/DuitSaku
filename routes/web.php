<?php
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return Inertia::render('Auth/Login');
});

Route::get('/signup', function () {
    return inertia('Auth/SignUp');
})->name('signup');
