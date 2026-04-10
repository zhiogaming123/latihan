<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pauling Adventure</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        body {
            background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') no-repeat center center/cover;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .overlay {
            background: rgba(0,0,0,0.6);
            min-height: 100vh;
        }

        .content {
            flex: 1;
        }

        .glass {
            background: rgba(255,255,255,0.1);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            color: white;
        }

        table {
            color: white;
        }

        .btn-custom {
            border-radius: 10px;
            padding: 6px 15px;
        }

        .navbar {
            backdrop-filter: blur(10px);
            background: rgba(0,0,0,0.6) !important;
        }

        footer {
            background: rgba(0,0,0,0.8);
            color: white;
        }
    </style>
</head>
<body>

<div class="overlay">

    <!-- NAVBAR -->
   <body>

<div class="overlay">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold">🌴 pauling adventure</a>
        </div>
    </nav>

    <!-- HERO TEXT -->
    <div class="text-center text-white mt-4">
        <h1 class="fw-bold">Explore Your Dream Destination</h1>
        <p class="text-light">Temukan destinasi terbaik untuk liburanmu ✨</p>
    </div>

    <!-- CONTENT -->
    <div class="container content mt-4">
        @yield('content')
    </div>

    <!-- FOOTER -->
    <footer class="text-center py-3 mt-4">
        © 2026 pauling adventure | dibuat dengan ❤️ oleh zhio
    </footer>

</div>

</body>
</html>