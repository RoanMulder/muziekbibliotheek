@extends('layouts.home')

@section('title', 'Home - Muziekbibliotheek')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="song-card text-center">
                    <h1 class="display-4 mb-4">🎵 Welcome to Muziekbibliotheek!</h1>
                    <p class="lead mb-5">Your personal music collection manager</p>
                    
                    <div class="row mt-4">
                        <div class="col-md-6 mb-4">
                            <div class="song-card h-100">
                                <h3>📚 View Library</h3>
                                <p>Browse through your entire music collection</p>
                                <a href="{{ route('library') }}" class="btn btn-primary">Go to Library</a>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="song-card h-100">
                                <h3>➕ Add New Song</h3>
                                <p>Add a new song to your collection</p>
                                <a href="{{ route('add') }}" class="btn btn-success">Add Song</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection