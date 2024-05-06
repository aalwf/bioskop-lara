<?php

use Illuminate\Support\Facades\Route;
use App\Models\Movie;
use App\Http\Controllers\MovieController;

Route::get('/', [MovieController::class, 'index']);

Route::get('/seat/{time}/{id}', [MovieController::class, 'seat']);
Route::post('/seat/order', [MovieController::class, 'store']);

Route::get('history', function () {
    return view('history', ['title' => 'History']);
});
