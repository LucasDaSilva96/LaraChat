<?php

use App\Events\Chat;
use App\Http\Controllers\ChatRoomController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Models\ChatRoom;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('/chat/{id}', [ChatRoomController::class, 'index'])->name('chat');

    Route::post('/logout', [UserController::class, 'logout'])->name('logout');


    // *** Messages
    Route::post('/send-message', [MessageController::class, 'send'])->name('send.message');

});



Route::group(['middleware' => 'guest'], function () {

    Route::get('/login', [UserController::class, 'index'])->name('login');
    Route::get('/register', [UserController::class, 'register'])->name('register');

    Route::post('/login', [UserController::class, 'login'])->name('login.post');

    Route::post('/register', [UserController::class, 'create'])->name('register.post');

});
