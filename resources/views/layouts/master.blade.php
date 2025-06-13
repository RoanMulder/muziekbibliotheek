<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Muziekbibliotheek')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #6c5ce7;
            --secondary-color: #a29bfe;
            --accent-color: #fd79a8;
            --background-color: #f8f9fa;
            --text-color: #2d3436;
        }

        body {
            background-color: var(--background-color);
            color: var(--text-color);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color)) !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .navbar-brand, .nav-link {
            color: white !important;
            font-weight: 500;
        }

        .nav-link:hover {
            color: rgba(255,255,255,0.8) !important;
        }

        .container {
            max-width: 1200px;
            padding: 20px;
        }

        h1 {
            color: var(--primary-color);
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
        }

        .btn-success {
            background-color: #00b894;
            border-color: #00b894;
        }

        .btn-success:hover {
            background-color: #00a884;
            border-color: #00a884;
        }

        .form-control {
            border-radius: 10px;
            border: 2px solid #e9ecef;
            padding: 10px 15px;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(108, 92, 231, 0.25);
        }

        .alert {
            border-radius: 10px;
            border: none;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        .alert-success {
            background-color: #00b894;
            color: white;
        }

        .alert-danger {
            background-color: #d63031;
            color: white;
        }

        .btn-close {
            filter: brightness(0) invert(1);
        }

        /* Song card styling */
        .song-card {
            background: white;
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }

        .song-card:hover {
            transform: translateY(-5px);
        }

        .song-card h3 {
            color: var(--primary-color);
            margin-bottom: 10px;
        }

        .song-card .badge {
            background-color: var(--secondary-color);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8em;
        }

        .song-card .actions {
            margin-top: 15px;
        }

        .song-card .actions a {
            margin-right: 10px;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 20px;
            font-weight: 500;
        }

        .song-card .actions .edit-btn {
            background-color: #00b894;
            color: white;
        }

        .song-card .actions .delete-btn {
            background-color: #d63031;
            color: white;
        }

        .song-card .meta {
            color: #636e72;
            font-size: 0.9em;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid #dfe6e9;
        }
    </style>
    @yield('head')
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">🎵 Muziekbibliotheek</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/library">Library</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/add">Add Song</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> 