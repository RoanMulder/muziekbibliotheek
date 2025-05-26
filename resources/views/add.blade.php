<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            padding: 20px;
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

        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            max-width: 400px;
            width: 100%;
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

        .alert {
            background: #f8d7da;
            border: 1px solid #f5c6cb;
            color: #721c24;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
        }

        .alert ul {
            margin: 0;
            padding-left: 20px;
        }

    </style>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('library') }}">Library</a>
        <a href="{{ route('song') }}">Song</a>
        <a href="{{ route('add') }}">Add</a>
    </nav>

    <form action="{{ route('add.store') }}" method="POST">
        @csrf
        <h2>Nieuwe Single</h2>
        
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
        @endif
        
        <label>Name</label>
        <input type="text" name="name" placeholder="Naam van de placeholder">
        
        <label>Auteur</label>
        <input type="text" name="artist" placeholder="Auteur">

        <label>Release jaar</label>
        <input type="date" name="release_date" placeholder="Release jaar">

        <button type="submit">Submit</button>
    </form>

</body>
</html>