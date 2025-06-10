@extends('layouts.master')

@section('title', 'Songs Library - Muziekbibliotheek')

@section('content')
    <h1>🎵 Songs Library</h1>
    
    @if(session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif
    
    @if(isset($songs) && $songs->count() > 0)
        <div class="stats">
            <strong>Total Songs: {{ $songs->count() }}</strong>
        </div>
        
        @foreach($songs as $song)
            <div class="song">
                <h3>{{ $song->name }}</h3>
                <p><strong>Artist:</strong> {{ $song->artist }}</p>
                <p><strong>Release Date:</strong> {{ \Carbon\Carbon::parse($song->release_date)->format('d M Y') }}</p>
                <div class="meta">
                    <small>Added: {{ $song->created_at->format('d-m-Y H:i') }}</small>
                </div>
            </div>
        @endforeach
    @else
        <div class="no-songs">
            <p>🎶 No songs in your library yet!</p>
            <p>Start building your collection by adding some songs.</p>
        </div>
    @endif
    
    <div style="text-align: center;">
        <a href="{{ route('add') }}" class="add-link">➕ Add New Song</a>
    </div>
@endsection