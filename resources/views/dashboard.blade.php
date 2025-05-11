<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Cafe</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .navbar {
            background-color: #fff6fa;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .nav-logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .nav-logo img {
            width: 40px;
            height: 40px;
        }

        .nav-links a {
            margin-left: 20px;
            text-decoration: none;
            color: #444;
            font-weight: 600;
            transition: color 0.2s ease;
        }

        .nav-links a:hover {
            color: #d63384;
        }
    </style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="navbar">
        <div class="nav-logo">
            <img src="{{ asset('image/logo.png') }}" alt="Logo Cafe">
            <span class="text-lg font-bold text-pink-600">PastelPlates</span>
        </div>
        <div class="nav-links">
            <a href="#">Home</a>
            <a href="#">Tentang Kami</a>
            <a href="#">pelayanan</a>
            <a href="#">Menu</a>
            <a href="#">Kontak</a>
        </div>
    </nav>

    <!-- Isi Dashboard -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <h1 class="text-3xl font-bold text-purple-700 mb-4">Selamat Datang di Dashboard CafeKita ☕</h1>
                    <p class="text-gray-600">Silakan navigasi melalui menu di atas untuk mengelola konten.</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
