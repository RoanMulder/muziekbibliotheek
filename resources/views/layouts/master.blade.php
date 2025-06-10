<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Muziekbibliotheek')</title>
    <style>
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
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 0;
            padding: 0;
        }

        nav li {
            margin: 0;
        }

        nav a {
            text-decoration: none;
            color: #007bff;
            padding: 10px 20px;
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
        }

        /* Error Messages */
        .alert {
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .alert-danger {
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
        }

        .alert-success {
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
        }

        /* Form Styles */
        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
            margin: 0 auto;
        }
        
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        
        input:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0,123,255,0.3);
        }

        button {
            width: 100%;
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        /* Song List Styles */
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

        .success {
            background: #d4edda;
            border: 1px solid #c3e6cb;
            color: #155724;
            padding: 12px;
            border-radius: 4px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('library') }}">Library</a></li>
                <li><a href="{{ route('song') }}">Song</a></li>
                <li><a href="{{ route('add') }}">Add</a></li>
            </ul>
        </nav>

        <div class="content">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>
    </div>
</body>
</html> 