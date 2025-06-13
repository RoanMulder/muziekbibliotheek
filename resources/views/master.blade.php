<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Songs Library')</title>
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
    </style>
</head>
<body>
    <div class="container">
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('library') }}">Library</a>
            <a href="{{ route('song') }}">Songs</a>
            <a href="{{ route('add') }}">Add Song</a>
        </nav>

        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>