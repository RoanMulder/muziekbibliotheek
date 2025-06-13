<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class LibraryController extends Controller
{
    public function show() 
    {
        $data = Song::all();
        return view('library')->with('songs', $data);
    }
}