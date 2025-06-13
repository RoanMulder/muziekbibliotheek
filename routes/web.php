<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\LibraryController;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/library', [LibraryController::class, 'show'])->name('library');

Route::get('/song', [SongController::class, 'index'])->name('song');

Route::get('/add', function () {
    return view('add');
})->name('add');

Route::post('/add', [SongController::class, 'store'])->name('add.store');

// Delete song route
Route::get('/song/delete/{id}', [SongController::class, 'delete'])->name('DeleteSong');

// Update song routes
Route::get('/song/update/{id}', [SongController::class, 'showUpdateForm'])->name('UpdateSongForm');
Route::post('/song/update', [SongController::class, 'update'])->name('UpdateSong');