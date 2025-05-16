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

    <!-- Hero Section -->
    <div class="hero-wrapper">
        <div class="hero-slider">
            <div class="hero-text-overlay">
                <h1 class="cinzel-decorative-bold">Selamat Datang <br> di Tena Kafe</h1>
            </div>
            <div class="slides">
                <img src="{{ asset('image/slide1.jpg') }}" alt="Slide 1">
                <img src="{{ asset('image/slide2.jpg') }}" alt="Slide 2">
                <img src="{{ asset('image/slide3.jpg') }}" alt="Slide 3">
            </div>
        </div>
    </div>

<!-- Coffee/Matcha Icon -->
<div style="text-align: center; margin: 2rem;">
    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #8a9a5b;">
        <path d="M21 17a4 4 0 0 0-4-4H7a4 4 0 0 0-4 4v2h18v-2z"></path>
        <path d="M17 3H7a4 4 0 0 0-4 4v6h18V7a4 4 0 0 0-4-4z"></path>
    </svg>
</div>

<!-- TENTANG KAMI SECTION -->
<section id="tentang" style="padding: 0.5rem 1rem 3rem 1rem; background-color: #f3f4ed; margin-top: -10px; position: relative;">
    <div style="max-width: 1200px; margin: auto;">
        <!-- Judul -->
        <h2 class="cinzel-decorative-bold" style="text-align: center; font-size: 2rem; color: #3e4e1c; margin-bottom: 2rem;">Tentang Kami</h2>

        <div style="display: flex; flex-wrap: wrap; align-items: flex-start; gap: 1rem; justify-content: space-between;">
            <!-- Kolase Gambar -->
            <div style="flex: 1; min-width: 280px; display: flex; flex-wrap: wrap; gap: 10px; max-width: 500px;">
                <img src="{{ asset('image/tentang2.jpg') }}" alt="Foto 1"
                     style="width: 48%; border-radius: 6px; transform: rotate(2deg);">
                <img src="{{ asset('image/tentang3.jpg') }}" alt="Foto 2"
                     style="width: 48%; border-radius: 6px; transform: rotate(-2deg);">
            </div>

            <!-- Deskripsi -->
            <div style="flex: 1; min-width: 280px; display: flex; flex-direction: column; justify-content: center;">
                <p style="font-size: 1rem; color: #333; line-height: 1.6; margin-bottom: 1.5rem; padding-top: 0.2rem; text-align: justify;">
                    Tena Matcha adalah tempat yang menghadirkan ketenangan dalam setiap sajian, dengan pengalaman lebih dari 25 tahun dalam menyajikan cita rasa tradisional yang tak terlupakan. Sejak berdiri pada tahun 1999, kami terus berkomitmen untuk memberikan kualitas terbaik dalam setiap cangkir matcha yang kami sajikan. Kami hadir untuk memanjakan hari Anda dengan pengalaman kuliner yang kaya akan rasa dan kenyamanan, menjadikan setiap momen lebih istimewa.
                </p>
                
                <a href="/tentang" style="align-self: start; padding: 0.5rem 1.2rem; background-color: #8a9a5b; color: white; border-radius: 30px; text-decoration: none; font-weight: bold; font-size: 0.95rem;">
                    Selengkapnya
                </a>
            </div>
        </div>
    </div>

    <!-- Gambar dekoratif pojok kanan bawah -->
    <img src="{{ asset('image/2org.png') }}" alt="2 orang" style="position: absolute; bottom: 0; right: 0; width: 500px; max-width: 25vw; z-index: 1; opacity: 0.9;">
</section>

            
          <!-- PELAYANAN SECTION -->
<section id="pelayanan" style="padding: 2rem; background-color: #ffffff;">
    <div style="max-width: 1200px; margin: auto;">
        <h2 class="cinzel-decorative-bold" style="text-align: center; font-size: 2rem; color: #3e4e1c; margin-bottom: 2rem;">Pelayanan Kami</h2>

        <div style="
          display: grid;
          grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
          gap: 1.5rem;
          justify-content: center;
          align-items: start;
          max-width: 1000px;
          margin: 0 auto;
        ">

            <!-- Card 1 -->
            <div style="background: linear-gradient(135deg, #a8c66c, #5e7a4d); border-radius: 10px; padding: 1rem; color: white; max-width: 300px;">
                <div style="text-align: center; margin-bottom: 1rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M3 10h18M5 6h14v4H5V6zM4 20v-6h16v6M9 14v6M15 14v6" />
                    </svg>
                </div>
                <h3 style="font-size: 1.2rem; font-weight: bold; margin-bottom: 0.5rem;">1. Dine-In Service</h3>
                <p style="font-size: 0.95rem;">Nikmati suasana nyaman dan hangat di tempat kami.
                    Kafe kami menyediakan tempat duduk indoor & outdoor yang tenang, cocok untuk bekerja, belajar, atau berkumpul bersama teman dan keluarga.</p>
            </div>

            <!-- Card 2 -->
            <div style="background: linear-gradient(135deg, #a8c66c, #5e7a4d); border-radius: 10px; padding: 1rem; color: white; max-width: 300px;">
                <div style="text-align: center; margin-bottom: 1rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M6 2l1 5h11l1-5H6zm1 7h10v12H7V9z" />
                    </svg>
                </div>
                <h3 style="font-size: 1.2rem; font-weight: bold; margin-bottom: 0.5rem;">2. Takeaway & Delivery</h3>
                <p style="font-size: 0.95rem;">Cepat, praktis, dan tetap nikmat.
                    Kami melayani pemesanan untuk dibawa pulang maupun melalui layanan pesan-antar melalui aplikasi seperti GoFood, GrabFood, dan ShopeeFood.</p>
            </div>

            <!-- Card 3 -->
            <div style="background: linear-gradient(135deg, #a8c66c, #5e7a4d); border-radius: 10px; padding: 1rem; color: white; max-width: 300px;">
                <div style="text-align: center; margin-bottom: 1rem;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="none" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                </div>
                <h3 style="font-size: 1rem; font-weight: bold; margin-bottom: 0.5rem;">3. Event & Reservasi Tempat</h3>
                <p style="font-size: 0.89rem;">Rayakan momen spesial Anda bersama kami.
                    Kami menyediakan reservasi tempat untuk acara ulang tahun, gathering kantor, arisan, atau private event dengan kapasitas hingga XX orang.
                    Kami juga menyediakan dekorasi sesuai tema permintaan (custom decoration).</p>
            </div>
        </div>
    </div>
</section>


<!-- Testimonial Section -->
<section id="testimoni" style="padding: 3rem 1rem; background-color: #eef1e1; position: relative;">
  <div style="max-width: 1200px; margin: auto;">
    <h2 class="cinzel-decorative-bold" style="text-align: center; font-size: 2rem; color: #3e4e1c; margin-bottom: 2rem;">
      Apa Kata Pengunjung?
    </h2>

    <!-- Wrapper + Arrows -->
    <div style="position: relative;">
      <!-- Left Button -->
      <button class="prev" style="position: absolute; left: -25px; top: 50%; transform: translateY(-50%); background-color: #3e4e1c; color: white; border: none; border-radius: 50%; width: 35px; height: 35px; cursor: pointer; z-index: 10; font-size: 1.5rem;">
        &#8249;
      </button>

      <!-- Testimonial Scroll Container -->
      <div class="testimonial-container" style="display: flex; overflow-x: scroll; scroll-snap-type: x mandatory; gap: 1.5rem; scrollbar-width: none; -ms-overflow-style: none;">
        <!-- Testy1 -->
        <div class="testimonial-card" style="flex: 0 0 300px; background: white; border-radius: 10px; padding: 2rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); scroll-snap-align: center;">
          <div style="display: flex; align-items: center; margin-bottom: 1rem;">
            <img src="{{ asset('image/customer1.jpg') }}" alt="Customer 1" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 1rem;">
            <div>
              <p style="font-weight: bold; color: #3e4e1c;">John Doe</p>
              <p style="font-size: 0.9rem; color: #888;">Pengunjung</p>
            </div>
          </div>
          <p style="text-align: center;">"Kafe ini adalah tempat yang sempurna untuk bersantai. Kopi dan matcha-nya luar biasa❗"</p>
        </div>

        <!-- Testy 2 -->
        <div class="testimonial-card" style="flex: 0 0 300px; background: white; border-radius: 10px; padding: 2rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); scroll-snap-align: center;">
          <div style="display: flex; align-items: center; margin-bottom: 1rem;">
            <img src="{{ asset('image/customer 2.jpg') }}" alt="Customer 2" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 1rem;">
            <div>
              <p style="font-weight: bold; color: #3e4e1c;">Noor Fadila</p>
              <p style="font-size: 0.9rem; color: #888;">Pengunjung</p>
            </div>
          </div>
          <p style="text-align: center;">"Suasana yang tenang dan pelayanan yang ramah membuat saya selalu kembali."</p>
        </div>

        <!-- Testy 3 -->
        <div class="testimonial-card" style="flex: 0 0 300px; background: white; border-radius: 10px; padding: 2rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); scroll-snap-align: center;">
            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
              <img src="{{ asset('image/customer3.jpg') }}" alt="Customer 3" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 1rem;">
              <div>
                <p style="font-weight: bold; color: #3e4e1c;">Emily White</p>
                <p style="font-size: 0.9rem; color: #888;">Pengunjung</p>
              </div>
            </div>
            <p style="text-align: center;">"Tena Matcha adalah tempat favorit saya & keluarga 👨‍👩‍👧‍👦 untuk menikmati waktu santai🍵."</p>
          </div>

          <!-- Testy 4 -->
          <div class="testimonial-card" style="flex: 0 0 300px; background: white; border-radius: 10px; padding: 2rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); scroll-snap-align: center;">
            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
              <img src="{{ asset('image/customer4.jpg') }}" alt="Customer 3" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 1rem;">
              <div>
                <p style="font-weight: bold; color: #3e4e1c;">Michael Johnson</p>
                <p style="font-size: 0.9rem; color: #888;">Pengunjung</p>
              </div>
            </div>
            <p style="text-align: center;">"Tena Matcha selalu menjadi pilihan utama saya untuk menikmati kopi berkualitas. Suasananya yang tenang membuat saya bisa bekerja dengan nyaman."</p>
          </div>

          <!-- Testy 5 -->
          <div class="testimonial-card" style="flex: 0 0 300px; background: white; border-radius: 10px; padding: 2rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); scroll-snap-align: center;">
            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
              <img src="{{ asset('image/customer5.jpg') }}" alt="Customer 3" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 1rem;">
              <div>
                <p style="font-weight: bold; color: #3e4e1c;">Jane Smith</p>
                <p style="font-size: 0.9rem; color: #888;">Pengunjung</p>
              </div>
            </div>
            <p style="text-align: center;">"Tena Matcha selalu jadi pilihan tepat untuk menikmati kopi enak dan matcha segar. Suasana santai dan pelayanan cepat membuat tempat ini cocok untuk me-time atau kerja!"</p>
          </div>

          <!-- Testy 6 -->
          <div class="testimonial-card" style="flex: 0 0 300px; background: white; border-radius: 10px; padding: 2rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); scroll-snap-align: center;">
            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
              <img src="{{ asset('image/customer6.jpg') }}" alt="Customer 3" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 1rem;">
              <div>
                <p style="font-weight: bold; color: #3e4e1c;">Layla Fariha</p>
                <p style="font-size: 0.9rem; color: #888;">Pengunjung</p>
              </div>
            </div>
            <p style="text-align: center;">"Tena Matcha adalah tempat favorit saya & keluarga untuk menikmati waktu santai..."</p>
          </div>

      </div>

      <!-- Right Button -->
      <button class="next" style="position: absolute; right: -25px; top: 50%; transform: translateY(-50%); background-color: #3e4e1c; color: white; border: none; border-radius: 50%; width: 35px; height: 35px; cursor: pointer; z-index: 10; font-size: 1.5rem;">
        &#8250;
      </button>
    </div>
  </div>
</section>

<!-- Hide scrollbar CSS -->
<style>
  .testimonial-container::-webkit-scrollbar {
    display: none;
  }
</style>

<!-- JS Geser -->
<script>
  const container = document.querySelector('.testimonial-container');
  const nextBtn = document.querySelector('.next');
  const prevBtn = document.querySelector('.prev');

  nextBtn.addEventListener('click', () => {
    container.scrollBy({ left: 320, behavior: 'smooth' });
  });

  prevBtn.addEventListener('click', () => {
    container.scrollBy({ left: -320, behavior: 'smooth' });
  });

  
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
