<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::prefix('/users')->name('user.')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/work-exp', [UserController::class, 'workExp'])->name('work-exp');
});

// Route::get('/admin/users/management', function () {
//     return '<h1 style="color: red">Hello World</h1>';
// })->name('admin.users.management');

// Route::get('/admin/users/reports', function () {
//     return '<h1 style="color: red">Hello World</h1>';
// })->name('admin.users.reports');

Route::view('/', 'welcome');

/* Route::get('/home', function () {
    return to_route('admin.users.management');
}); */
//dynamic routes example
/* Route::get('posts/{id}', function ($id) {
    return "Post ID: $id";
})->name('post.show'); */

/* Route::get('/profile/{name?}', function (?string $name = null) {
    return "User Name: $name";
}); */
//end dynamic routes example
//http request 
/* 
Route::get('/request', function (Request $request) {
    dd($request->query('name'));
}); */