@extends('layouts.master')

<<<<<<< HEAD
@section('title', 'Library - Songs Library')

@section('content')
    <h1>📚 Music Library</h1>
    
    @if(isset($songs) && $songs->count() > 0)
        <div class="text-center mb-4">
            <span class="badge bg-primary p-2">Total Songs: {{ $songs->count() }}</span>
        </div>
        
        @foreach($songs as $song)
            <div class="song-card">
                <h3>{{ $song->name }}</h3>
                <span class="badge">ID: {{ $song->id }}</span>
                <p class="mt-3"><strong>Artist:</strong> {{ $song->artist }}</p>
                <p><strong>Release Date:</strong> {{ \Carbon\Carbon::parse($song->release_date)->format('d M Y') }}</p>
                
                <div class="actions">
                    <a href="{{ route('UpdateSongForm', $song->id) }}" class="edit-btn">Edit</a>
                    <a href="{{ route('DeleteSong', $song->id) }}" class="delete-btn" onclick="return confirm('Are you sure you want to delete this song?')">Delete</a>
                </div>
                
                <div class="meta">
                    <small>Added: {{ $song->created_at->format('d-m-Y H:i') }}</small>
                </div>
            </div>
        @endforeach
    @else
        <div class="text-center py-5">
            <h3 class="text-muted">🎶 No songs in your library yet!</h3>
            <p class="text-muted">Start building your collection by adding some songs.</p>
        </div>
    @endif
    
    <div class="text-center mt-4">
        <a href="{{ route('add') }}" class="btn btn-primary btn-lg">➕ Add New Song</a>
    </div>
=======
@section('title', 'Library - Muziekbibliotheek')

@section('content')
    <h1>Library Page</h1>
>>>>>>> 3715a37799704dacf2580b7842fa60d75b67eb49
@endsection