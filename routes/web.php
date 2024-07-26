<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
});

Route::prefix('user')->name('user.')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    Route::get('/work-experience', function () {
        return '<h2>Company: </h2>
                <h2> Position:</h2>'
                ;
    })->name('work-experience');

    Route::redirect('/', '/user/profile');

});

Route::get('/posts/{id}', function ($id) {
    return "Post ID: $id";
})->name('posts.show');

Route::get('/profile/{name?}', function (?string $name = 'no name found') {
    return "User name: $name";
});

Route::get('/request', function (Request $request) {
    dd($request->query(''));
});

