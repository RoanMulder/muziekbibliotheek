<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SongController;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/library', function () {
    return view('library');
})->name('library');

// Change this line to use the controller
Route::get('/song', [SongController::class, 'index'])->name('song');

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::post('/add', [SongController::class, 'store'])->name('add.store');