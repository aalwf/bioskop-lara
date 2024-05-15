<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MovieController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\HistoryController;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'index']);
    Route::get('/login', [LoginController::class, 'index'])->name('login');
});


Route::post('/register', [RegisterController::class, 'store']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/', [MovieController::class, 'index']);


Route::middleware('auth')->group(function () {
    Route::get('/page/profile', [ProfileController::class, 'index']);
    Route::post('/page/profile', [ProfileController::class, 'update']);

    Route::get('/seat/{time}/{id}', [MovieController::class, 'seat']);
    Route::post('/seat/order', [MovieController::class, 'store']);

    Route::get('/print/{id}', [PrintController::class, 'print']);

    Route::get('/history', [HistoryController::class, 'index']);
    Route::get('/detail/{id}', [HistoryController::class, 'show']);
    Route::get('/history/delete/{id}', [HistoryController::class, 'destroy']);

    Route::post('/logout', [LoginController::class, 'logout']);
})->name('login');
