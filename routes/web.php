<?php

use Illuminate\Support\Facades\Route;

// installed routing method
// Route::get('/', function () {
//     return view('welcome');
// });


// alternative to regular routing
Route::view ('/', 'welcome')->name('welcome');


// Route::prefix('/user')->group(function(){
//     Route::get('/profile', function(){
//         return 'Name: <br>Address: <br>Email: <br>';
//     });
//     Route::get('/work-experience', function(){
//         return 'Company: <br>Position: <br>';
//     });
// });



Route::prefix('/user')->name('user.')->group(function () {
    Route::get('/profile', function () {
        return '<h1>Name: John Niero Medina<br>Address: San Mateo, Rizal<br>Email: niero@gmail.com<br></h1>';
    })->name('profile');

    Route::get('/work-experience', function () {
        return '<h1>Company: LWUA<br>Position: Corporate Planning Chief<br></h1>';
    })->name('work-experience');

    Route::redirect('/', 'user/profile')->name('home');
    //Route::get("/", function () => to_route('user.profile'))->name('home');

});