<?php

use Illuminate\Support\Facades\Route;

/*
prefix - group repetitive variables

Route::prefix('/admin/users.') -> group(function(){
Route::get('/admin/1/edit', function () {
return '<h1 style = "color:red;text-align:center;font-size:5rem">Hello World! Laravel</h1>';

}) -> name('users'); //apply

});

 */

// Route::get('/', function () {
//     return '<h1 style = "color:red;text-align:center;font-size:5rem">Hello World! Laravel</h1>';
// });

// //group routes that have the same names
// Route::get('/admin/users/')->name('admin.')->group(function () {
//     Route::get('/admin/management', function () {
//         return '<h1 style = "color:red;text-align:center;font-size:5rem">Hello World! Laravel</h1>';
//     })->name('admin.users.management');

//     Route::get('/admin/reports', function () {
//         return '<h1 style = "color:red;text-align:center;font-size:5rem">Hello World! Laravel</h1>';
//     })-> name('admin.users.reports');
// });

// Route::view('/', 'welcome');

// Route::redirect('/home', to_route('users.management'));

Route::prefix('/user')->name('user.')->group(function () {

    //for user profile
    Route::get('/profile', function () {
        return
            '
            <h1> Name:  </h1>
            <br>
            <h1> Address:</h1>
            <br>
            <h1> Email: </h1>
            ';
    })->name('profile');

    //for work experience
    Route::get('/work-experience', function () {
        return
            '
            <h1> Company: </h1>
            <br>
            <h1> Position: </h1>
            ';
    })->name('work-experience');

    //redirect
    Route::redirect('/user', '/user/profile')->name('home');
});
