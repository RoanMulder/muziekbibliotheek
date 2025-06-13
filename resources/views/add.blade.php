@extends('layouts.master')

@section('title', 'Add Song - Songs Library')

@section('content')
    <h2>🎵 Add New Song</h2>
    
    @if ($errors->any())
        <div style="background: #f8d7da; border: 1px solid #f5c6cb; color: #721c24; padding: 10px; border-radius: 4px; margin-bottom: 15px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('add.store') }}" method="POST" style="max-width: 400px; margin: 0 auto;">
        @csrf
        
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #555;">Song Name</label>
            <input type="text" name="name" value="{{ old('name') }}" placeholder="Song name" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;" required>
        </div>
        
        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #555;">Artist</label>
            <input type="text" name="artist" value="{{ old('artist') }}" placeholder="Artist name" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;" required>
        </div>

        <div style="margin-bottom: 15px;">
            <label style="display: block; margin-bottom: 5px; font-weight: bold; color: #555;">Release Date</label>
            <input type="date" name="release_date" value="{{ old('release_date') }}" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; font-size: 16px;" required>
        </div>

        <button type="submit" style="width: 100%; background-color: #007bff; color: white; padding: 12px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; font-weight: bold;">Add Song</button>
    </form>
@endsection