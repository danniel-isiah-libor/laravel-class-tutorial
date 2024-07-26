<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return '<h1 style= "color: green">hello world</h1>';
});

// prefix route
// Route::prefix('/users')->group(function() {
//     Route::get('/admin/1/edit', function () {
//         // return view('welcome');
//         return '<h1 style= "color: green">hello world</h1>';
//     });

//     Route::get('/admin/1/show', function () {
//         // return view('welcome');
//         return '<h1 style= "color: green">hello world</h1>';
//     });
// });

// name route
// Route::prefix('/users')->group(function() {
//     Route::get('/admin/1/edit', function () {
//         // return view('welcome');
//         return '<h1 style= "color: green">hello world</h1>';
//     })->name('admin.edit');

//     Route::get('/admin/1/show', function () {
//         // return view('welcome');
//         return '<h1 style= "color: green">hello world</h1>';
//     });
// });

Route::view('/', 'welcome');

// Route::prefix('/admin/users')->name('admin.')->group(function() {
//     Route::get('/management', function () {
//       return view('welcome');
//          return '<h1 style= "color: green">hello world</h1>';
//      });

//      Route::get('/reports', function () {
//         return view('welcome');
//          return '<h1 style= "color: green">hello world</h1>';
//      });
//  });

Route::prefix('/user')->name('user.')->group(function() {
    Route::get('/profile', function () {
            return '<h1 style= "color: green">Name: Mark Vincent Jungco</h1>
                    <h2 style= "color: blue">Address: Baclaran, Pque city</h2>
                    <h2 style= "color: red">Email: jungcomarkvincent@gmail.com</h2>';
    })->name('profile');

    Route::get('/work-experience', function () {
            return '<h1 style= "color: green">Company: Inventive Media</h1>
                    <h2 style= "color: green">Position: Web Developer Intern</h2>';
    })->name('work-experience');

    // Route::redirect('/', '/user/profile')->name('home');
    Route::get('/', fn () => to_route('user.profile'))->name('home');
});



// Route:get('/home', function())