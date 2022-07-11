<?php

use Illuminate\Support\Facades\Route;


// the index route
Route::view('/','video');
//route for the saving to database
Route::post('/saveMedia', [App\Http\Controllers\UserController::class, 'saveMedia'])->name('saveMedia');
//route for fetching media from the database
Route::any('/fetchMedia', [App\Http\Controllers\UserController::class, 'fetchMedia'])->name('fetchMedia');

