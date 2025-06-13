<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {
        $songs = Song::all();
        return view('song', compact('songs'));
    }

    public function create()
    {
        return view('add');
    }

    public function show(Request $request)
    {
        $songs = Song::all();
        return view('song', compact('songs'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|string|min:3|max:32',
            'artist' => 'required|string|min:6|max:32',
            'release_date' => 'required|date',
        ]);

        $song = new Song();
        $song->name = $request->input('name');
        $song->artist = $request->input('artist');
        $song->release_date = $request->input('release_date');
        $song->save();

        return redirect()->route('library')->with('success', 'Song added successfully!');
    }

    public function delete($id): RedirectResponse
    {
        $song = Song::find($id);
        
        if ($song) {
            $song->delete();
            return redirect()->route('library')->with('success', 'Song deleted successfully!');
        }
        
        return redirect()->route('library')->with('error', 'Song not found!');
    }

    public function showUpdateForm($id)
    {
        $song = Song::find($id);
        
        if (!$song) {
            return redirect()->route('library')->with('error', 'Song not found!');
        }
        
        return view('updatesongform', compact('song'));
    }

    public function update(Request $request): RedirectResponse
    {
        $request->validate([
            'id' => 'required|exists:songs,id',
            'name' => 'required|string|min:3|max:32',
            'artist' => 'required|string|min:6|max:32',
            'release_date' => 'required|date',
        ]);

        $song = Song::find($request->input('id'));
        $song->name = $request->input('name');
        $song->artist = $request->input('artist');
        $song->release_date = $request->input('release_date');
        $song->save();

        return redirect()->route('library')->with('success', 'Song updated successfully!');
    }
}