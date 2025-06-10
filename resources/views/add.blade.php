@extends('layouts.master')

@section('title', 'Add New Song - Muziekbibliotheek')

@section('content')
    <form action="{{ route('add.store') }}" method="POST">
        @csrf
        <h2>Nieuwe Single</h2>
        
        <label>Name</label>
        <input type="text" name="name" placeholder="Naam van de placeholder">
        
        <label>Auteur</label>
        <input type="text" name="artist" placeholder="Auteur">

        <label>Release jaar</label>
        <input type="date" name="release_date" placeholder="Release jaar">

        <button type="submit">Submit</button>
    </form>
@endsection