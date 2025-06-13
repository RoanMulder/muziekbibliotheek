<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.master')

@section('title', 'Library - Songs Library')

@section('content')
    <h1>📚 Music Library</h1>
    
    @if(isset($songs) && $songs->count() > 0)
        <div style="text-align: center; margin-bottom: 20px; color: #6c757d;">
            <strong>Total Songs: {{ $songs->count() }}</strong>
        </div>
        
        @foreach($songs as $song)
            <div style="background: #f8f9fa; border: 1px solid #e9ecef; padding: 20px; margin: 15px 0; border-radius: 8px;">
                <h3 style="color: #007bff; margin-bottom: 10px;">{{ $song->name }}</h3>
                <p><strong>Artist:</strong> {{ $song->artist }}</p>
                <p><strong>Release Date:</strong> {{ \Carbon\Carbon::parse($song->release_date)->format('d M Y') }}</p>
                <div style="margin-top: 15px;">
                    <a href="{{ route('UpdateSongForm', $song->id) }}" style="background-color: #28a745; color: white; padding: 8px 16px; text-decoration: none; border-radius: 4px; margin-right: 10px;">Edit</a>
                    <a href="{{ route('DeleteSong', $song->id) }}" style="background-color: #dc3545; color: white; padding: 8px 16px; text-decoration: none; border-radius: 4px;" onclick="return confirm('Are you sure you want to delete this song?')">Delete</a>
                </div>
                <div style="font-size: 0.9em; color: #6c757d; margin-top: 10px; border-top: 1px solid #dee2e6; padding-top: 10px;">
                    <small>Added: {{ $song->created_at->format('d-m-Y H:i') }}</small>
                </div>
            </div>
        @endforeach
    @else
        <div style="text-align: center; color: #6c757d; font-size: 1.1em; margin: 40px 0;">
            <p>🎶 No songs in your library yet!</p>
            <p>Start building your collection by adding some songs.</p>
        </div>
    @endif
    
    <div style="text-align: center; margin-top: 30px;">
        <a href="{{ route('add') }}" style="display: inline-block; background-color: #007bff; color: white; padding: 12px 24px; text-decoration: none; border-radius: 4px;">➕ Add New Song</a>
    </div>
@endsection
</body>
</html>