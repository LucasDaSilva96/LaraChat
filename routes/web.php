<?php

use App\Http\Controllers\ChatRoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/chat/{id}', [ChatRoomController::class, 'index'])->name('chat');

});



Route::group(['middleware' => 'guest'], function () {

    Route::get('/login', [UserController::class, 'index'])->name('login');
    Route::get('/register', [UserController::class, 'register'])->name('register');

});
