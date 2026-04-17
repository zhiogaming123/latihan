<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body{
            font-family: Poppins, sans-serif;
            height:100vh;
            margin:0;
            display:flex;
            justify-content:center;
            align-items:center;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        }

        .card{
            width:380px;
            padding:25px;
            border-radius:15px;
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255,255,255,0.2);
            color:white;
        }

        input{
            background: rgba(255,255,255,0.1) !important;
            border:none !important;
            color:white !important;
        }

        input::placeholder{
            color: rgba(255,255,255,0.6);
        }

        .btn-modern{
            background: linear-gradient(45deg,#00c6ff,#0072ff);
            border:none;
            width:100%;
            color:white;
        }

        a{
            color:#00c6ff;
            text-decoration:none;
        }
    </style>
</head>

<body>

<div class="card">

    <h3 class="text-center mb-3">📝 Sign Up</h3>

    <form method="GET" action="/register">
        @csrf

        <input type="text" class="form-control mb-3" placeholder="Name">

        <input type="email" class="form-control mb-3" placeholder="Email">

        <input type="password" class="form-control mb-3" placeholder="Password">

        <button class="btn btn-modern">Register</button>

        <p class="text-center mt-3">
            Sudah punya akun? <a href="/login">Sign In</a>
        </p>

    </form>

</div>

</body>
</html>