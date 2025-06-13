<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SongController;
use App\Http\Controllers\LibraryController;

Route::get('/', function () {
    return redirect('/home');
});


Route::get('/home', [HomeController::class, 'show'])->name('home');

Route::get('/library', [LibraryController::class, 'show'])->name('library');

Route::get('/song', [SongController::class, 'index'])->name('song');

Route::get('/add', [SongController::class, 'create'])->name('add');

Route::post('/add', [SongController::class, 'store'])->name('add.store');

Route::get('/song/delete/{id}', [SongController::class, 'delete'])->name('DeleteSong');

Route::get('/song/update/{id}', [SongController::class, 'showUpdateForm'])->name('UpdateSongForm');

Route::post('/song/update', [SongController::class, 'update'])->name('UpdateSong'); 
