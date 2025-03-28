<?php

use App\Http\Controllers\ChatRoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/chat/{id}', [ChatRoomController::class, 'index'])->name('chat');

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');

});



Route::group(['middleware' => 'guest'], function () {

    Route::get('/login', [UserController::class, 'index'])->name('login');
    Route::get('/register', [UserController::class, 'register'])->name('register');

    Route::post('/login', [UserController::class, 'login'])->name('login.post');

    Route::post('/register', [UserController::class, 'create'])->name('register.post');

});
