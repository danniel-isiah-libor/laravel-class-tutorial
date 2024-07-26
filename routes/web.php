<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
});

Route::prefix('user')->name('user.')->group(function () {
    Route::get('/profile', function () {
        return '<h2>Name: </h2>
                <h2>Address: </h2>
                <h2>Email: </h2>' 
                ; 
    })->name('profile');

    Route::get('/work-experience', function () {
        return '<h2>Company: </h2>
                <h2> Position:</h2>'
                ;
    })->name('work-experience');

    Route::redirect('/', '/user/profile');

});