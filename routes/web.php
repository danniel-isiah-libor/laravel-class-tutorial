<?php

use Illuminate\Support\Facades\Route;


Route::prefix('/user') -> name("user.") -> group(function() {
    Route::get('/profile', function () {
        return '<h1 style="color: red">Nigel Camba</h1>
        <h2 style="color: blue">Oroqueta St.</h2>
        <h3 style="color: green">nigelcamba@gmail.com</h3>';
    }) ->name('profile');
    Route::get('/work-experience', function () {
        return '<h1 style="color: green">Web Dev</h1>';
    }) ->name('work-experience');

    Route::get('/', fn() => to_route("user.profile")) ->name('home');
});

Route::view('/', "welcome");

// Route::redirect('/', '/user/profile') ->name('home');
