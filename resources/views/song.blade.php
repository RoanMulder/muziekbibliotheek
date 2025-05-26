<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs Library</title>
    <style>
/* Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        /* Navigation */
        nav {
            background-color: white;
            padding: 15px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: #007bff;
            padding: 10px 20px;
            margin: 0 10px;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
            display: inline-block;
        }

        nav a:hover {
            background-color: #007bff;
            color: white;
        }

        .content {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 800px;
        }
        
        h1 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .success {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 12px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .song {
            background: #f8f9fa;
            border: 1px solid #e9ecef;
            padding: 20px;
            margin: 15px 0;
            border-radius: 8px;
            transition: transform 0.2s;
        }

        .song:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .song h3 {
            color: #007bff;
            margin-bottom: 10px;
            font-size: 1.3em;
        }

        .song p {
            margin: 5px 0;
            color: #555;
        }

        .song .meta {
            font-size: 0.9em;
            color: #6c757d;
            margin-top: 10px;
            border-top: 1px solid #dee2e6;
            padding-top: 10px;
        }

        .no-songs {
            text-align: center;
            color: #6c757d;
            font-size: 1.1em;
            margin: 40px 0;
        }

        .add-link {
            display: inline-block;
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin-top: 20px;
            transition: background-color 0.3s;
        }

        .add-link:hover {
            background-color: #0056b3;
        }

        .stats {
            text-align: center;
            margin-bottom: 20px;
            color: #6c757d;
        }
    </style>
</head>
<body>

    <div class="container">
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('library') }}">Library</a>
            <a href="{{ route('song') }}">Song</a>
            <a href="{{ route('add') }}">Add</a>
        </nav>

        <div class="content">
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
        </div>
    </div>

</body>
</html>