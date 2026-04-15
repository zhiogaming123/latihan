<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pauling Adventure</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') no-repeat center center/cover;
        }

        .overlay {
            background: rgba(0,0,0,0.6);
            min-height: 100vh;
        }

        .glass {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            color: white;
        }

        .navbar {
            background: rgba(0,0,0,0.7) !important;
        }
    </style>
</head>

<body>
<div class="overlay">

    <!-- ✅ NAVBAR FIX -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold">🌴 Pauling Adventure</a>

            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/destinations">Destinations</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="attraction">Attraction</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/packages">Packages</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/hotels">Hotels</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    

                    <!-- DROPDOWN -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            Admin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/users">Users</a></li>
                            <li><a class="dropdown-item" href="/destinations">Manage Destination</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <div class="text-center text-white mt-4">
        <h1 class="fw-bold">Explore Your Dream Destination</h1>
        <p>Temukan destinasi terbaik untuk liburanmu ✨</p>
    </div>

    <!-- CONTENT -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- FOOTER -->
    <footer class="text-center text-white py-3 mt-4">
        © 2026 Pauling Adventure
    </footer>

</div>

<!-- ✅ WAJIB: Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')

</body>
</html>