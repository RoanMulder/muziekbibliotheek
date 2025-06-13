@extends('layouts.master')

@section('title', 'Update Song - Songs Library')

@section('content')
    <h2>🎵 Update Song</h2>
    
    @if ($errors->any())
        <div style="background: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; padding: 10px; border-radius: 4px; margin-bottom: 15px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('UpdateSong') }}" method="POST" style="max-width: 400px; margin: 0 auto;">
        @csrf
        
        <input type="hidden" name="id" value="{{ $song->id }}">
        
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #555;">Song Name</label>
            <input type="text" name="name" value="{{ old('name', $song->name) }}" placeholder="Song name" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;" required>
        </div>
        
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #555;">Artist</label>
            <input type="text" name="artist" value="{{ old('artist', $song->artist) }}" placeholder="Artist name" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;" required>
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #555;">Release Date</label>
            <input type="date" name="release_date" value="{{ old('release_date', $song->release_date) }}" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;" required>
        </div>

        <button type="submit" style="width: 100%; background-color: #007bff; color: white; padding: 12px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; font-weight: bold;">Update Song</button>
    </form>
    
    <div style="text-align: center; margin-top: 20px;">
        <a href="{{ route('library') }}" style="color: #007bff; text-decoration: none;">← Back to Library</a>
    </div>
@endsection