<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @extends('layouts.master')

    @section('title', 'Home - Songs Library')

    @section('content')
        <h1>Welcome to Songs Library</h1>
        <p>Manage your music collection with ease!</p>
    @endsection

    <a href="{{ route('home') }}">Home</a>
    <a href="{{ route('library') }}">Library</a>
    <a href="{{ route('song') }}">Song</a>
    <a href="{{ route('add') }}">Add</a>
    <h1>Home Page</h1>

</body>
</html>