@extends('layouts.master')

@section('title', 'Add Song - Muziekbibliotheek')

@section('content')
    <div class="container">
        <h1 class="mb-4">Add a New Song</h1>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('add.store') }}" method="POST" class="needs-validation" novalidate>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Song Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" 
                       id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="artist" class="form-label">Artist</label>
                <input type="text" class="form-control @error('artist') is-invalid @enderror" 
                       id="artist" name="artist" value="{{ old('artist') }}" required>
                @error('artist')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="release_date" class="form-label">Release Date</label>
                <input type="date" class="form-control @error('release_date') is-invalid @enderror" 
                       id="release_date" name="release_date" value="{{ old('release_date') }}" required>
                @error('release_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary">Add Song</button>
                <a href="{{ route('library') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection