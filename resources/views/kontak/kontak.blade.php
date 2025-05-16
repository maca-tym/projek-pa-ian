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
            
<section class="contact-section" style="display: flex; flex-wrap: wrap; background: #fff; border-radius: 10px; margin: 2rem auto; padding: 2rem; max-width: 1100px; box-shadow: 0 4px 10px rgba(0,0,0,0.08);">
  <!-- Kiri: Formulir Kontak -->
  <div class="contact-form" style="flex: 2; padding-right: 2rem;">
    <h2>Contact Us</h2>
    <p>Kami berkomitmen untuk memberikan pelayanan terbaik dan dukungan penuh agar pengalaman Anda melebihi ekspektasi.</p>
    <form>
      <div class="form-group" style="display: flex; gap: 10px; margin-bottom: 15px;">
        <input type="text" placeholder="First Name" required style="flex: 1; padding: 12px; border: 1px solid #ccc; border-radius: 6px;">
        <input type="text" placeholder="Last Name" required style="flex: 1; padding: 12px; border: 1px solid #ccc; border-radius: 6px;">
      </div>
      <input type="email" placeholder="Email" required style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 6px; margin-bottom: 15px;">
      <textarea placeholder="Message" required style="width: 100%; padding: 12px; height: 100px; border: 1px solid #ccc; border-radius: 6px; resize: vertical; margin-bottom: 15px;"></textarea>
      <button type="submit" style="padding: 12px; background-color:#5e714e; color: white; border: none; border-radius: 6px; font-size: 16px; cursor: pointer;">Submit</button>
    </form>
  </div>

 <!-- Info Kontak Tena Matcha dengan warna kotak bergantian -->
<div class="contact-info" style="flex: 1; border-radius: 8px; padding: 1rem; display: flex; flex-direction: column; gap: 0.8rem;">

  <!-- Kotak 1 - Hijau Muda Matcha -->
  <div class="info-box" style="background-color: #dcedc1; border-radius: 6px; padding: 12px;">
    <h4 style="margin: 0 0 4px; font-size: 1rem;">Alamat</h4>
    <p style="margin: 0; font-size: 0.9rem;">Jl. Kyoto Indah No. 01, Bandung<br>Kode Pos 40291</p>
  </div>

  <!-- Kotak 2 - Hijau Tua -->
  <div class="info-box" style="background-color: #a4c686; border-radius: 6px; padding: 12px;">
    <h4 style="margin: 0 0 4px; font-size: 1rem;">Hubungi Kami</h4>
    <p><i class="fa-solid fa-phone" style="color: #2f3e1e; margin-right: 6px;"></i>+62 812-4561-8976</p>
    <p><i class="fa-solid fa-envelope" style="color: #2f3e1e; margin-right: 6px;"></i>tenamatcha@gmail.com</p>
    <p><i class="fa-brands fa-facebook" style="color: #2f3e1e; margin-right: 6px;"></i>tenamatcha.com</p>
    <p><i class="fa-brands fa-instagram" style="color: #2f3e1e; margin-right: 6px;"></i>tenamatcha.com</p>
</div>

  <!-- Kotak 4 - Hijau Tua Lagi -->
  <div class="info-box" style="background-color: #b7cc9d; border-radius: 6px; padding: 12px;">
    <h4 style="margin: 0 0 4px; font-size: 1rem;">Jam Operasional</h4>
    <p style="margin: 0; font-size: 0.9rem;">Senin - Sabtu: 10.00 - 19.00<br>Minggu libur</p>
  </div>
</div>

  </div>
</section>

  
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
