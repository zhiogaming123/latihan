<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pauling Adventure</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            overflow-x: hidden;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 240px;
            height: 100%;
            background: rgba(0,0,0,0.6);
            backdrop-filter: blur(15px);
            padding: 20px;
            z-index: 1000;
            transition: 0.3s;
        }

        .sidebar .nav-link {
            color: white;
            margin: 8px 0;
            padding: 10px;
            border-radius: 10px;
            transition: 0.2s;
        }

        .sidebar .nav-link:hover {
            background: rgba(255,255,255,0.1);
            transform: translateX(5px);
        }

        /* CONTENT */
        .content {
            margin-left: 260px;
            padding: 20px;
        }

        /* MOBILE */
        @media(max-width:768px){
            .sidebar {
                left: -260px;
            }

            .sidebar.active {
                left: 0;
            }

            .content {
                margin-left: 0;
            }
        }

        /* TOGGLE */
        .toggle-btn {
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1100;
            background: #0072ff;
            border: none;
            color: white;
            padding: 8px 12px;
            border-radius: 8px;
        }

        /* BACKGROUND */
        .overlay {
            background: rgba(0,0,0,0.5);
            min-height: 100vh;
        }

        /* BUBBLE */
        .bubbles {
            position: fixed;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .bubbles span {
            position: absolute;
            bottom: -150px;
            width: 20px;
            height: 20px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            animation: rise 15s linear infinite;
        }

        @keyframes rise {
            0% { transform: translateY(0); opacity: 0.5; }
            100% { transform: translateY(-1000px); opacity: 0; }
        }

        /* GLASS */
        .glass {
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(15px);
            border-radius: 15px;
            padding: 20px;
            color: white;
            border: 1px solid rgba(255,255,255,0.2);
        }

        /* BUTTON */
        .btn-modern {
            background: linear-gradient(45deg, #00c6ff, #0072ff);
            border: none;
            padding: 8px 16px;
            color: white;
            border-radius: 10px;
            box-shadow: 0 5px 0 #0056b3;
        }

        .btn-modern:active {
            transform: translateY(4px);
            box-shadow: 0 2px 0 #0056b3;
        }

        footer {
            background: rgba(0,0,0,0.5);
        }
    </style>
</head>

<body>

<!-- TOGGLE -->
<button class="toggle-btn d-md-none" onclick="toggleSidebar()">☰</button>

<!-- SIDEBAR -->
<div class="sidebar" id="sidebar">

    <h5 class="text-white fw-bold mb-3">🌴 Pauling Adventure</h5>

    <ul class="navbar-nav">

        <li><a class="nav-link" href="/">Home</a></li>
        <li><a class="nav-link" href="/destinations">Destinations</a></li>
        <li><a class="nav-link" href="attraction">Attraction</a></li>
        <li><a class="nav-link" href="pauling">Pauling</a></li>
        <li><a class="nav-link" href="/packages">Packages</a></li>
        <li><a class="nav-link" href="/hotels">Hotels</a></li>
        <li><a class="nav-link" href="/about">About</a></li>

        <li class="mt-3 text-white-50">Admin</li>
        <li><a class="nav-link" href="/users">Users</a></li>
        <li><a class="nav-link" href="/destinations">Manage Destination</a></li>

        <hr style="color:white;">

        <li class="text-white-50">Account</li>
        <li><a class="nav-link" href="/login">🔑 Sign In</a></li>
        <li><a class="nav-link" href="/register">📝 Sign Up</a></li>

    </ul>
</div>

<!-- BUBBLE -->
<div class="bubbles">
    <span style="left:10%"></span>
    <span style="left:30%"></span>
    <span style="left:50%"></span>
    <span style="left:70%"></span>
    <span style="left:90%"></span>
</div>

<div class="overlay content">

    <!-- HERO -->
    <div class="container mt-4">

        <div class="glass text-center p-5 mb-4">

            <h1 class="fw-bold">🌴 Pauling Adventure</h1>
            <p class="mt-2">Explore Indonesia's most beautiful destinations with us</p>

            <a href="/destinations" class="btn btn-modern mt-3">
                Explore Now
            </a>

        </div>

        @yield('content')

    </div>

    <!-- FOOTER -->
    <footer class="text-center text-white py-3 mt-4">
        © 2026 Pauling Adventure
    </footer>

</div>

<script>
function toggleSidebar(){
    document.getElementById('sidebar').classList.toggle('active');
}
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

@stack('scripts')

</body>
</html>