<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        // Get all songs from database
        $songs = Song::all();
        return view('song', compact('songs'));
    }

    public function show(Request $request)
    {
        // Get all songs from database
        $songs = Song::all();
        var_dump($request->all());
        return view('song', compact('songs'));
    }

    public function store(Request $request): RedirectResponse
    {
        // Validate the request
        $request->validate([
            'name' => 'required|string|min:3|max:32',
            'artist' => 'required|string|min:6|max:32',
            'release_date' => 'required|date',
        ]);

        // Create a new song
        $song = new Song();
        $song->name = $request->input('name');
        $song->artist = $request->input('artist');
        $song->release_date = $request->input('release_date');
        $song->save();

        // Redirect to song page with success message
        return redirect()->route('song')->with('success', 'Song added successfully!');
    }
}