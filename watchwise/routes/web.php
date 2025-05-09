<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewController;

// Redirect '/' to the movie index page
Route::get('/', function () {
    return redirect()->route('movies.index');
});

// Resourceful routes for movies and reviews
Route::resource('movies', MovieController::class);
Route::resource('reviews', ReviewController::class);
