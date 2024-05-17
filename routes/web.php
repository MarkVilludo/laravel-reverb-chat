<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{RoomsController, ChatController};

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rooms', [RoomsController::class, 'index'])->name('rooms.index');
Route::get('/rooms/{room}', [RoomsController::class, 'show'])->name('rooms.show');
Route::post('/rooms/{roomId}/message', [ChatController::class, 'postMessage'])->name('api.rooms.message.post');