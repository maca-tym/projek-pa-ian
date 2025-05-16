<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Kafe</title>
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        /* Navbar */
        .navbar {
            background-color: #8a9a5b;
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
            border-radius: 50%;
            object-fit: cover;
        }

        .logo-title {
            font-family: "Cinzel Decorative", serif;
            font-weight: 700;
            font-size: 1rem;
            color: #142b14;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }

        .nav-links a {
            margin-left: 20px;
            text-decoration: none;
            color: #142b14;
            font-weight: 600;
            transition: color 0.2s ease;
        }

        .nav-links a:hover {
            color: #bcec7e;
        }

        /* Hero Section */
        .hero-wrapper {
            position: relative;
            height: 100vh;
            width: 100%;
        }

        .hero-slider {
            position: relative;
            height: 100%;
            width: 100%;
            overflow: hidden;
        }

        /* Dropdown */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn span {
    margin-left: 4px;
    font-size: 0.7em;
    vertical-align: middle;
}

.dropbtn {
    background: none;
    border: none;
    font: inherit;
    cursor: pointer;
    padding: 8px 16px;
    color: inherit;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 10px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f0f0f0;
}

.dropdown:hover .dropdown-content {
    display: block;
}


        .hero-text-overlay {
            position: absolute;
            top: 50%;
            left: 5%;
            transform: translateY(-50%);
            z-index: 2;
            color: white;
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6), 0 0 25px rgba(255, 255, 255, 0.5);
            line-height: 1.2;
            max-width: 60%;
            padding: 1.5rem 2rem;
            border-radius: 8px;
        }

        /* Font Classes */
        .cinzel-decorative-regular {
            font-family: "Cinzel Decorative", serif;
            font-weight: 400;
        }

        .cinzel-decorative-bold {
            font-family: "Cinzel Decorative", serif;
            font-weight: 700;
        }

        .cinzel-decorative-black {
            font-family: "Cinzel Decorative", serif;
            font-weight: 900;
        }

        /* Slider */
        .slides {
            display: flex;
            width: 300%;
            height: 100%;
            animation: slideAnim 12s infinite;
        }

        .slides img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .slides img:first-child,
        .slides img:nth-child(2),
        .slides img:nth-child(3) {
            height: 100%;
        }

        @keyframes slideAnim {
            0%   { margin-left: 0%; }
            33%  { margin-left: 0%; }
            36%  { margin-left: -100%; }
            66%  { margin-left: -100%; }
            69%  { margin-left: -200%; }
            100% { margin-left: -200%; }
        }
    </style>
</head>
<body class="bg-gray-100">

  <!-- Navbar -->
<nav class="navbar">
    <div class="nav-logo">
        <img src="{{ asset('image/matcha logo.jpg') }}" alt="Logo Cafe">
        <span class="logo-title">Tena Matcha</span>
    </div>

    <div class="nav-links">
        <a href="/dashboard">Home</a>
        <a href="/tentang">Tentang Kami</a>
        <a href="/pelayanan">Pelayanan</a>
        <a href="/menu">Menu</a>

       <!-- Dropdown Kontak -->
<div class="dropdown">
   <button class="dropbtn">
    Kontak 
    <svg class="arrow-down" width="14" height="14" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 10.939l3.71-3.71a.75.75 0 111.06 1.06l-4.24 4.25a.75.75 0 01-1.06 0l-4.25-4.25a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
    </svg>
</button>
    <div class="dropdown-content">
        <a href="/kontak">Hubungi Kami</a>
        <a href="/reservasi">Reservasi</a>
    </div>
</div>


        <!-- Logout -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>
    </div>
</nav>

<!-- Menu -->
<div style="display: flex; justify-content: center; background: linear-gradient(to right, #e3f9d5, #b5d88d); min-height: 100vh; padding: 2rem; font-family: sans-serif;">
  <div style="width: 100%; max-width: 1100px;">

    <!-- Top Bar -->
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
      <h1 style="font-size: 2rem; font-weight: 800;">Fresh Pressed Juice</h1>
      <div style="display: flex; gap: 1rem; align-items: center;">
        <input type="text" placeholder="Search" style="padding: 0.5rem 1rem; border-radius: 12px; border: none; outline: none;" />
        <div id="cart-icon" style="position: relative; cursor: pointer;" onclick="toggleCartPopup()">
          🛒 <span style="position: absolute; top: -10px; right: -10px; background: red; color: white; font-size: 0.75rem; padding: 2px 6px; border-radius: 50%;" id="cartValue">0</span>
        </div>
      </div>
    </div>

    <!-- Kategori -->
    <div style="display: flex; gap: 1rem; margin-bottom: 1.5rem;">
      <button onclick="filterCategory('Minuman')" style="background: #fff; padding: 0.75rem 1rem; border-radius: 12px; cursor: pointer;">🍋 Minuman</button>
      <button onclick="filterCategory('Dessert')" style="background: #fff; padding: 0.75rem 1rem; border-radius: 12px; cursor: pointer;">🥝 Dessert</button>
      <button onclick="filterCategory('Makanan')" style="background: #fff; padding: 0.75rem 1rem; border-radius: 12px; cursor: pointer;">🍓 Makanan</button>
      <button onclick="filterCategory('All')" style="background: #fff; padding: 0.75rem 1rem; border-radius: 12px; cursor: pointer;">🍹 All</button>
    </div>

    <!-- Produk -->
    <div id="product-list" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 1.5rem;">
      <!-- Card 1 -->
      <div class="product-card" data-category="Dessert" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu1.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Green tea flavored ice</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok diminum dingin.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 28.000</p>
          <button onclick="addToCart('Green tea flavored ice', 28000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="product-card" data-category="Dessert" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu2.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Paint Bread</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok dimakan dengan teh.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 20.000</p>
          <button onclick="addToCart('Matcha Paint Bread', 20000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="product-card" data-category="Minuman" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu3.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Ice</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok dimakan dengan teh.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 19.000</p>
          <button onclick="addToCart('Matcha Ice', 19000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

        <!-- Card 4 -->
      <div class="product-card" data-category="Makanan" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu4.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Burger</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok dimakan dengan teh.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 20.000</p>
          <button onclick="addToCart('Matcha Burger', 20000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

        <!-- Card 5 -->
      <div class="product-card" data-category="Minuman" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu5.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok dimakan dengan teh.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 20.000</p>
          <button onclick="addToCart('Matcha', 20000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="product-card" data-category="Minuman" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu6.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Mango Matcha Latte</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok diminum dingin.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 30.000</p>
          <button onclick="addToCart('Mango Matcha Latte', 30000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="product-card" data-category="Dessert" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu7.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Ice Cream</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok diminum dingin.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 25.000</p>
          <button onclick="addToCart('Matcha Ice Cream', 25000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="product-card" data-category="Dessert" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu8.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Ice Cream</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok diminum dingin.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 25.000</p>
          <button onclick="addToCart('Matcha Ice Cream', 25000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

      <!-- Card 9 -->
      <div class="product-card" data-category="Dessert" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu9.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Ice Cream</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok diminum dingin.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 25.000</p>
          <button onclick="addToCart('Matcha Ice Cream', 25000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

       <!-- Card 10 -->
      <div class="product-card" data-category="Makanan" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu10.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Ice Cream</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok diminum dingin.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 25.000</p>
          <button onclick="addToCart('Matcha Ice Cream', 25000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

      <!-- Card 11 -->
      <div class="product-card" data-category="Dessert" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu11.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Ice Cream</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok diminum dingin.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 25.000</p>
          <button onclick="addToCart('Matcha Ice Cream', 25000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

       <!-- Card 12 -->
      <div class="product-card" data-category="Dessert" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu12.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Ice Cream</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok diminum dingin.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 25.000</p>
          <button onclick="addToCart('Matcha Ice Cream', 25000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

       <!-- Card 13 -->
      <div class="product-card" data-category="Dessert" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu13.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Ice Cream</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok diminum dingin.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 25.000</p>
          <button onclick="addToCart('Matcha Ice Cream', 25000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

       <!-- Card 14 -->
      <div class="product-card" data-category="Dessert" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu14.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Ice Cream</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok diminum dingin.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 25.000</p>
          <button onclick="addToCart('Matcha Ice Cream', 25000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

      <!-- Card 15 -->
      <div class="product-card" data-category="Dessert" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu15.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Ice Cream</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok diminum dingin.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 25.000</p>
          <button onclick="addToCart('Matcha Ice Cream', 25000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

       <!-- Card 16 -->
      <div class="product-card" data-category="Dessert" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu16.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Ice Cream</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok diminum dingin.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 25.000</p>
          <button onclick="addToCart('Matcha Ice Cream', 25000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

       <!-- Card 17 -->
      <div class="product-card" data-category="Makanan" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu17.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Ice Cream</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok diminum dingin.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 25.000</p>
          <button onclick="addToCart('Matcha Ice Cream', 25000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

      <!-- Card 18 -->
      <div class="product-card" data-category="Makanan" style="background: #fff; border-radius: 20px; padding: 1.2rem; text-align: left; box-shadow: 0 4px 12px rgba(0,0,0,0.1); transition: transform 0.2s;">
        <div style="height: 120px; border-radius: 12px; margin-bottom: 1rem; background-image: url('image/menu18.png'); background-size: cover; background-position: center;"></div>
        <h3 style="font-weight: 600;">Matcha Ice Cream</h3>
        <p style="font-size: 0.85rem; margin: 0.5rem 0;">Segar & manis, cocok diminum dingin.</p>

        <!-- Harga & Tombol + -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 1rem;">
          <p style="font-weight: bold; margin: 0;">Rp. 25.000</p>
          <button onclick="addToCart('Matcha Ice Cream', 25000)" style="padding: 6px 12px; border-radius: 50%; border: none; background: #63c76a; color: white; font-size: 1rem; cursor: pointer;">+</button>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Popup Cart -->
<div id="cart-popup" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.4); align-items: center; justify-content: center; z-index: 1000;">
  <div style="background: white; padding: 1.5rem 2rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.2); width: 90%; max-width: 400px; position: relative; font-family: sans-serif;">
    <h2 style="margin-bottom: 1rem; text-align: center;">🛒 Keranjang Anda</h2>
    
    <ul id="cart-items" style="list-style: none; padding: 0; margin: 0 0 1rem 0; max-height: 250px; overflow-y: auto;"></ul>

    <div style="display: flex; justify-content: space-between; font-weight: bold; margin-bottom: 1rem;">
      <span>Total Harga</span>
      <span id="cart-total">Rp 0</span>
    </div>

    <button onclick="checkoutCart()" style="width: 100%; padding: 0.75rem; border: none; border-radius: 12px; background: #63c76a; color: white; font-weight: bold; font-size: 1rem; cursor: pointer;">Beli Sekarang</button>

    <button onclick="toggleCartPopup()" style="margin-top: 1rem; width: 100%; padding: 0.6rem; border: none; border-radius: 12px; background: #ccc; color: #333; cursor: pointer;">Tutup</button>
  </div>
</div>

<script>
  let cart = 0;
  let cartData = [];

  function addToCart(productName, price) {
    cart++;

    const found = cartData.find(item => item.name === productName);
    if (found) {
      found.qty += 1;
    } else {
      cartData.push({ name: productName, qty: 1, price: price });
    }

    document.getElementById("cartValue").textContent = cart;
  }

  function toggleCartPopup() {
    const popup = document.getElementById("cart-popup");
    const list = document.getElementById("cart-items");
    const total = document.getElementById("cart-total");

    list.innerHTML = '';
    let totalHarga = 0;

    if (cartData.length === 0) {
      list.innerHTML = '<li style="color: gray; text-align: center;">Keranjang kosong.</li>';
    } else {
      cartData.forEach((item, index) => {
        totalHarga += item.qty * item.price;
        const li = document.createElement('li');
        li.style.display = 'flex';
        li.style.justifyContent = 'space-between';
        li.style.alignItems = 'center';
        li.style.margin = '0.5rem 0';

        li.innerHTML = `
          <span>${item.name} x ${item.qty}</span>
          <button onclick="removeItem(${index})" style="background: red; color: white; border: none; border-radius: 8px; padding: 0.3rem 0.6rem; cursor: pointer;">🗑</button>
        `;
        list.appendChild(li);
      });
    }

    total.textContent = `Rp ${totalHarga.toLocaleString('id-ID')}`;

    popup.style.display = popup.style.display === "flex" ? "none" : "flex";
    popup.style.display === "flex" && popup.scrollIntoView({ behavior: "smooth" });
  }

  function removeItem(index) {
    cart -= cartData[index].qty;
    cartData.splice(index, 1);
    document.getElementById("cartValue").textContent = cart;
    toggleCartPopup();
    toggleCartPopup();
  }

  function checkoutCart() {
    alert("Terima kasih sudah membeli! 😊");
    cart = 0;
    cartData = [];
    document.getElementById("cartValue").textContent = 0;
    toggleCartPopup();
  }

  // Filter berdasarkan kategori
  function filterCategory(category) {
    const products = document.querySelectorAll('.product-card');

    products.forEach(product => {
      const productCategory = product.getAttribute('data-category');
      if (category === 'All' || productCategory === category) {
        product.style.display = 'block';
      } else {
        product.style.display = 'none';
      }
    });
  }
</script>





</script>
<!-- FONT AWESOME (WAJIB DITARUH DI <head>) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- FOOTER -->
<footer style="position: relative; background: linear-gradient(to bottom, #dcedc1, #5e7a4d); padding-top: 60px; padding-bottom: 2rem; text-align: center; overflow: hidden;">

  <!-- SVG WAVE AT TOP -->
  <div style="position: absolute; top: 0; left: 0; width: 100%; height: 60px; overflow: hidden; line-height: 0;">
    <svg viewBox="0 0 500 60" preserveAspectRatio="none" style="height: 100%; width: 100%;">
      <path d="M0,30 C150,80 350,0 500,30 L500,0 L0,0 Z" style="stroke: none; fill: #c1d0a8;"></path>
    </svg>
  </div>

  <!-- Kontainer -->
  <div style="max-width: 1000px; margin: auto; position: relative; z-index: 2; padding-top: 1rem;">

    <!-- Judul -->
    <h2 style="color: #2f3e1e; font-size: 1.5rem; font-weight: bold; margin-bottom: 1rem;">Tena Matcha</h2>

    <!-- Info Kontak -->
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 1rem; color: #2f3e1e; margin-bottom: 2rem;">
      <div><i class="fas fa-phone"></i> +62 812-4561-8976</div>
      <div><i class="fas fa-envelope"></i> tenamatcha@gmail.com</div>
      <div><i class="fas fa-map-marker-alt"></i> Jl. Kyoto Indah 01 </div>
      <div><i class="fas fa-globe"></i> www.tenamatcha.com</div>
    </div>

    <!-- Subscribe Form -->
    <div style="margin-bottom: 2rem;">
      <input type="email" placeholder="Enter your Email..." style="padding: 0.6rem; width: 250px; border-radius: 5px; border: 1px solid #ccc;">
      <button style="padding: 0.6rem 1rem; background-color: #3e4e1c; color: white; border: none; border-radius: 5px;">Subscribe</button>
    </div>

    <!-- Maps -->
    <div style="overflow: hidden; border-radius: 10px; margin-bottom: 2rem;">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.9478810526424!2d-80.8391861!3d35.227086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8856a0cd177e2257%3A0xb5e8b1c1ec0d5f8!2sCharlotte%2C%20NC!5e0!3m2!1sen!2sus!4v1600000000000!5m2!1sen!2sus"
        width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy">
      </iframe>
    </div>

    <!-- Ikon Sosmed -->
    <div style="margin-bottom: 1.5rem;">
      <a href="https://facebook.com" target="_blank" style="margin: 0 0.5rem; color: #2f3e1e; font-size: 1.2rem;"><i class="fab fa-facebook-f"></i></a>
      <a href="https://instagram.com" target="_blank" style="margin: 0 0.5rem; color: #2f3e1e; font-size: 1.2rem;"><i class="fab fa-instagram"></i></a>
      <a href="https://wa.me/628123456789" target="_blank" style="margin: 0 0.5rem; color: #2f3e1e; font-size: 1.2rem;"><i class="fab fa-whatsapp"></i></a>
    </div>

    <!-- Footer Text + Gambar -->
    <div style="font-size: 0.9rem; color: #2f3e1e;">
      This website is designed by mafi-tena
      <div style="margin-top: 1rem;">
        <img src="image/dodel.png" alt="logo-footer" style="max-width: 500px; height: auto;">
      </div>
    </div>

  </div>
</footer>


</body>
</html>
