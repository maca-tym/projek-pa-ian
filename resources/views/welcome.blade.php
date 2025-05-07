<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Restoran AF</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, #fceabb 0%, #f8b500 100%);
      font-family: 'Pacifico', cursive;
      height: 100vh;
      overflow: hidden;
      position: relative;
    }

    h1 {
      font-size: 3.5rem;
      color: #fff;
      text-shadow: 2px 2px 6px rgba(0,0,0,0.3);
    }

    .btn-custom {
      padding: 0.75rem 2rem;
      font-size: 1.2rem;
      border-radius: 50px;
      margin: 10px;
      border: none;
      transition: all 0.3s ease;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .btn-custom:hover {
      transform: scale(1.05);
    }

    .floating-food {
      position: absolute;
      width: 80px;
      animation: floaty 6s ease-in-out infinite;
      z-index: 1;
    }

    @keyframes floaty {
      0% { transform: translateY(0px) rotate(0deg); }
      50% { transform: translateY(-20px) rotate(10deg); }
      100% { transform: translateY(0px) rotate(0deg); }
    }

    .container-main {
      position: relative;
      z-index: 10;
    }
  </style>
</head>
<body class="d-flex align-items-center justify-content-center text-center">

  <!-- Semua animasi makanan -->
  <img src="{{ asset('image/coffee.png') }}" class="floating-food goyang" style="top:-10%; left:3%; width:330px;">
  <img src="{{ asset('image/dimsum.png') }}" class="floating-food" style="top:15%; right:6%; width:250px;">

  <div class="container container-main">
    <h1>Welcome to Restaurant</h1>
    <div class="mt-4">
      <a href="{{ route('login') }}" class="btn btn-light btn-custom">Login</a>
      <a href="{{ route('register') }}" class="btn btn-warning btn-custom">Register</a>
    </div>
  </div>

</body>
</html>
