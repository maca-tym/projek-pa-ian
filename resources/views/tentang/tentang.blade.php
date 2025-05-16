<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Kafe</title>
    <!-- Google Font -->
     <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            display: block;
            width: 100%;
            height: auto;
        }

        .slides img {
            width: 100%;
            height: auto;
            object-fit: cover;
            display: block;
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
                <h1 class="cinzel-decorative-bold">Kenali <br> Tena Kafe🌿</h1>
            </div>
            <div class="slides">
                <img src="{{ asset('image/y.jpg') }}" >
            </div>
        </div>
    </div>

<!-- TENTANG KAMI SECTION -->
<section id="tentang" style="padding: 0.5rem 1rem 7rem 3rem; background-color: #ffffff; margin-top: -10px; position: relative;">
    <div style="max-width: 1200px; margin: auto;">
        <!-- Judul -->
        <h2 class="cinzel-decorative-bold" style="text-align: center; font-size: 2rem; color: #3e4e1c; margin-bottom: 2rem;">Cerita Kami</h2>

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
                <p style="font-size: 1rem; color: #333; line-height: 1.6; margin-bottom: 1.5rem; padding-top: 0rem; text-align: justify;">
                  🌿 Tena Matcha adalah tempat yang menghadirkan ketenangan dalam setiap sajian, dengan pengalaman lebih dari 25 tahun dalam menyajikan cita rasa tradisional yang tak terlupakan. Sejak berdiri pada tahun 1999, kami terus berkomitmen untuk memberikan kualitas terbaik dalam setiap cangkir matcha yang kami sajikan. Kami hadir untuk memanjakan hari Anda dengan pengalaman kuliner yang kaya akan rasa dan kenyamanan, menjadikan setiap momen lebih istimewa.<br>
                    🍵 Terinspirasi dari budaya teh Jepang yang penuh makna, kami membawa konsep kedai yang tenang, hangat, dan bersahaja. Di Tena Matcha, Anda tidak hanya menikmati minuman berkualitas tinggi, tetapi juga atmosfer damai yang menenangkan pikiran dan jiwa. Setiap sudut café kami dirancang dengan sentuhan tradisional dan elemen alami yang merefleksikan harmoni dan kesederhanaan.
                </p>
            </div>
        </div>
    </div>

    <!-- Gambar dekoratif pojok kanan bawah -->
    <img src="{{ asset('image/2org.png') }}" alt="2 orang" style="position: absolute; bottom: 0; right: 0; width: 300px; max-width: 25vw; z-index: 1; opacity: 0.9;">
</section>

<!-- VIsi MISI -->
<style>
 .visi-misi-container {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  background: linear-gradient(to right, #e8f5e9, #f1f8e9);
  padding: 60px 80px;
  border-radius: 20px;
  position: relative;
  overflow: hidden;
  font-family: 'Segoe UI', sans-serif;
  gap: 40px; /* jarak antar box */
}


  .box {
  background-color: #ffffff;
  width: 45%;
  border-radius: 15px;
  padding: 30px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
  transition: transform 0.3s ease;
  margin-right: 20px; /* tambahkan ini jika tidak pakai gap */
}


  .box:hover {
    transform: translateY(-5px);
  }

  .title {
    font-size: 28px;
    font-weight: bold;
    color: #2e7d32;
    text-align: center;
    margin-bottom: 20px;
  }

  .content {
    font-size: 16px;
    color: #444;
    line-height: 1.7;
  }

  .content ul {
    padding-left: 20px;
    margin: 0;
  }

  .leaf {
    position: absolute;
    opacity: 90;
    width: 200px;
    z-index: 0;
  }

  .leaf-left {
    top: 10px;
    left: 10px;
    transform: rotate(-20deg);
  }

  .leaf-right {
    bottom: 10px;
    right: 10px;
    transform: rotate(100eg);
  }

  @media (max-width: 768px) {
    .visi-misi-container {
      flex-direction: column;
      padding: 30px;
    }

    .box {
      width: 100%;
      margin-bottom: 30px;
    }
  }
</style>

<!-- HTML -->
<div class="visi-misi-container">
  <img src="image/susu.png" class="leaf leaf-left" alt="Daun kiri">
  <img src="image/daun.png" class="leaf leaf-right" alt="Daun kanan">

  <div class="box">
    <div class="title"> 🌿 Visi </div>
    <div class="content">
"Menjadi kafe pilihan utama yang menyajikan cita rasa terbaik dengan suasana hangat dan pelayanan yang bersahabat, serta berperan aktif dalam mendukung produk lokal dan kelestarian lingkungan."
    </div>
  </div>

  <div class="box">
    <div class="title"> ☕ Misi</div>
    <div class="content">
     <ul>
       <li>Menyediakan aneka hidangan dan minuman berkualitas tinggi dengan bahan-bahan pilihan lokal.</li> 
       <li>Menciptakan suasana kafe yang nyaman, estetik, dan ramah untuk semua kalangan.</li>
        <li>Mengedepankan pelayanan yang cepat, hangat, dan penuh keramahan.</li>
         <li>Berinovasi dalam menu dan konsep ruang untuk mengikuti tren tanpa meninggalkan nilai lokal.</li> 
         <li>Berkomitmen pada praktik bisnis berkelanjutan dan ramah lingkungan.</li> 
      </ul>
    </div>
  </div>
</div>

<!-- tim tena -->
<style>
  .judul-profil {
    text-align: center;
    font-size: 28px;
    font-weight: bold;
    color: #2e7d32;
    margin-top: 40px;
    font-family: 'Segoe UI', sans-serif;
  }

  .profil-wrapper {
    overflow: hidden;
    position: relative;
    background-color: #ffffff;
    padding: 40px 0;
  }

  .profil-container {
    display: flex;
    gap: 30px;
    padding: 0 40px;
    animation: slide 12s linear infinite;
    width: max-content;
  }

  .profil-card {
    background-color: #f5fff6;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
    width: 250px;
    text-align: center;
    overflow: hidden;
    transition: transform 0.3s ease;
    flex-shrink: 0;
  }

  .profil-card:hover {
    transform: translateY(-5px);
  }

  .profil-card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
  }

  .profil-info {
    padding: 15px;
  }

  .profil-nama {
    font-weight: bold;
    font-size: 18px;
    color: #2e7d32;
    margin-bottom: 5px;
  }

  .profil-jabatan {
    font-size: 14px;
    color: #555;
  }

  @keyframes slide {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  @media (max-width: 768px) {
    .profil-container {
      animation-duration: 40s;
      gap: 20px;
    }

    .profil-card {
      width: 200px;
    }

    .profil-card img {
      height: 200px;
    }

    .judul-profil {
      font-size: 22px;
    }
  }
</style>

<div class="judul-profil">Tim Tena Matcha</div>

<div class="profil-wrapper">
  <div class="profil-container">
    <!-- 1 Set Kartu -->
    <div class="profil-card">
      <img src="image/barista1.jpg" alt="Foto Tim 1">
      <div class="profil-info">
        <div class="profil-nama"> Ayla Nirmala </div>
        <div class="profil-jabatan">Barista</div>
      </div>
    </div>
    
    <div class="profil-card">
      <img src="image/barista2.jpg" alt="Foto Tim 2">
      <div class="profil-info">
        <div class="profil-nama"> Intan Permata </div>
        <div class="profil-jabatan">Barista</div>
      </div>
    </div>

    <div class="profil-card">
      <img src="image/barista3.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Rafa Wiratama</div>
        <div class="profil-jabatan">Barista</div>
      </div>
    </div>

    <!-- Duplikat biar animasi loop mulus -->
    <div class="profil-card">
      <img src="image/manager1.jpg" alt="Foto Tim 1">
      <div class="profil-info">
        <div class="profil-nama">Marsya Maharani</div>
        <div class="profil-jabatan">Manager</div>
      </div>
    </div>

    <div class="profil-card">
      <img src="image/manager2.jpg" alt="Foto Tim 2">
      <div class="profil-info">
        <div class="profil-nama">Fitri Oktavia</div>
        <div class="profil-jabatan">Manager</div>
      </div>
    </div>

    <div class="profil-card">
      <img src="image/koki1.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Leya Azeya</div>
        <div class="profil-jabatan">Koki</div>
      </div>
    </div>

    <div class="profil-card">
      <img src="image/koki2.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Elan Saka</div>
        <div class="profil-jabatan">Koki</div>
      </div>
    </div>

     <div class="profil-card">
      <img src="image/kitchen staff4.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Nuray Alara</div>
        <div class="profil-jabatan">Kitchen Staff</div>
      </div>
    </div>

    <div class="profil-card">
      <img src="image/kitchen staff1.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Rei Pranaya</div>
        <div class="profil-jabatan">Kitchen Staff</div>
      </div>
    </div>

    <div class="profil-card">
      <img src="image/kitchen staff2.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Liviazzahra</div>
        <div class="profil-jabatan">Kitchen Staff</div>
      </div>
    </div>

    <div class="profil-card">
      <img src="image/waiters1.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Emir Zoi</div>
        <div class="profil-jabatan">Waiters</div>
      </div>
    </div>

    <div class="profil-card">
      <img src="image/waiters2.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Soraya</div>
        <div class="profil-jabatan">Waiters</div>
      </div>
    </div>

     <div class="profil-card">
      <img src="image/kasir1.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Nuray Alara</div>
        <div class="profil-jabatan">Kasir</div>
      </div>
    </div>

    <div class="profil-card">
      <img src="image/kasir2.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Nuray Alara</div>
        <div class="profil-jabatan">Kasir</div>
      </div>
    </div>

    <div class="profil-card">
      <img src="image/kasir1.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Nuray Alara</div>
        <div class="profil-jabatan">Kasir</div>
      </div>
    </div>

    <div class="profil-card">
      <img src="image/kasir2.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Nuray Alara</div>
        <div class="profil-jabatan">Kasir</div>
      </div>
    </div>

    <div class="profil-card">
      <img src="image/kasir1.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Nuray Alara</div>
        <div class="profil-jabatan">Kasir</div>
      </div>
    </div>

    <div class="profil-card">
      <img src="image/kasir2.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Nuray Alara</div>
        <div class="profil-jabatan">Kasir</div>
      </div>
    </div>

    <div class="profil-card">
      <img src="image/kasir1.jpg" alt="Foto Tim 3">
      <div class="profil-info">
        <div class="profil-nama">Nuray Alara</div>
        <div class="profil-jabatan">Kasir</div>
      </div>
    </div>
    
  </div>
</div>

<!-- Section Testimoni (di Halaman Home) -->
<section id="testimoni" style="padding: 3rem 1rem; background-color: #eef1e1;">
  <div style="max-width: 1200px; margin: auto;">
    <h2 class="cinzel-decorative-bold" style="text-align: center; font-size: 2rem; color: #3e4e1c; margin-bottom: 2rem;">
      Apa Kata Pengunjung?
    </h2>

    <!-- FORM ISI TESTIMONI -->
    <form id="formTestimoni" style="margin-bottom: 2rem; background: #fff; padding: 2rem; border-radius: 10px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); max-width: 600px; margin-inline: auto;">
      <h3 style="color: #3e4e1c; margin-bottom: 1rem; text-align: center;">Tulis Testimoni Anda</h3>
      <input type="text" id="nama" placeholder="Nama Anda" required style="width: 100%; margin-bottom: 1rem; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
      <input type="text" id="jabatan" placeholder="Contoh: Pengunjung" required style="width: 100%; margin-bottom: 1rem; padding: 10px; border-radius: 8px; border: 1px solid #ccc;">
      <textarea id="pesan" placeholder="Tulis testimoni di sini..." rows="4" required style="width: 100%; margin-bottom: 1rem; padding: 10px; border-radius: 8px; border: 1px solid #ccc;"></textarea>
      <div style="text-align: center;">
        <button type="submit" style="background-color: #3e4e1c; color: white; padding: 10px 20px; border: none; border-radius: 8px; cursor: pointer;">
          Kirim Testimoni
        </button>
      </div>
    </form>

    <!-- Container dan Panah -->
    <div style="position: relative;">
      <button class="prev" style="position: absolute; left: -25px; top: 50%; transform: translateY(-50%); background-color: #3e4e1c; color: white; border: none; border-radius: 50%; width: 35px; height: 35px; cursor: pointer; z-index: 10;">
        &#8249;
      </button>

      <div class="testimonial-container" style="display: flex; overflow-x: auto; scroll-snap-type: x mandatory; gap: 1.5rem; scrollbar-width: none; -ms-overflow-style: none;">
        <!-- Testimoni dinamis akan muncul di sini -->
      </div>

      <button class="next" style="position: absolute; right: -25px; top: 50%; transform: translateY(-50%); background-color: #3e4e1c; color: white; border: none; border-radius: 50%; width: 35px; height: 35px; cursor: pointer; z-index: 10;">
        &#8250;
      </button>
    </div>
  </div>
</section>

<!-- HIDE SCROLLBAR -->
<style>
  .testimonial-container::-webkit-scrollbar {
    display: none;
  }
</style>

<!-- JS UNTUK FORM DAN SLIDER -->
<script>
  const container = document.querySelector('.testimonial-container');
  const form = document.getElementById('formTestimoni');
  const nextBtn = document.querySelector('.next');
  const prevBtn = document.querySelector('.prev');

  nextBtn.addEventListener('click', () => {
    container.scrollBy({ left: 320, behavior: 'smooth' });
  });
  prevBtn.addEventListener('click', () => {
    container.scrollBy({ left: -320, behavior: 'smooth' });
  });

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const nama = document.getElementById('nama').value;
    const jabatan = document.getElementById('jabatan').value;
    const pesan = document.getElementById('pesan').value;

    const card = document.createElement('div');
    card.className = 'testimonial-card';
    card.style.cssText = "flex: 0 0 300px; background: white; border-radius: 10px; padding: 2rem; box-shadow: 0 4px 8px rgba(0,0,0,0.1); scroll-snap-align: center;";

    card.innerHTML = `
      <div style="display: flex; align-items: center; margin-bottom: 1rem;">
        <img src="https://ui-avatars.com/api/?name=${encodeURIComponent(nama)}&background=3e4e1c&color=fff" alt="${nama}" style="width: 50px; height: 50px; border-radius: 50%; object-fit: cover; margin-right: 1rem;">
        <div>
          <p style="font-weight: bold; color: #3e4e1c;">${nama}</p>
          <p style="font-size: 0.9rem; color: #888;">${jabatan}</p>
        </div>
      </div>
      <p style="text-align: center;">"${pesan}"</p>
    `;

    container.appendChild(card);
    container.scrollTo({ left: container.scrollWidth, behavior: 'smooth' });
    form.reset();
  });
</script>

<!-- GALERI SECTION -->
<section id="galeri" style="padding: 3rem 1rem; background-color: #ffffff;">
  <div style="max-width: 1000px; margin: auto;">

    <!-- Judul -->
    <h2 class="cinzel-decorative-bold" style="text-align: center; font-size: 2rem; color: #3e4e1c; margin-bottom: 2rem;">
      Galeri Tena Matcha
    </h2>

    <!-- Masonry Container -->
    <div class="masonry-container">
      <img src="{{ asset('image/galeri1.jpg') }}" alt="Galeri 1">
      <img src="{{ asset('image/galeri2.jpg') }}" alt="Galeri 2">
      <img src="{{ asset('image/galeri3.jpg') }}" alt="Galeri 3">
      <img src="{{ asset('image/galeri4.jpg') }}" alt="Galeri 4">
      <img src="{{ asset('image/galeri5.jpg') }}" alt="Galeri 5">
      <img src="{{ asset('image/galeri6.jpg') }}" alt="Galeri 6">
      <img src="{{ asset('image/galeri7.jpg') }}" alt="Galeri 7">
      <img src="{{ asset('image/galeri8.jpg') }}" alt="Galeri 8">
      <img src="{{ asset('image/galeri9.png') }}" alt="Galeri 9">
    </div>

    <!-- Gambar 3 Orang -->
    <div style="text-align: center; margin-top: 3rem;">
      <img src="{{ asset('image/3 org.png') }}" alt="3 Orang" style="width: 300px; max-width: 80vw; opacity: 0.9;">
    </div>
  </div>
</section>

<!-- CSS -->
<style>
  .masonry-container {
    column-count: 2;
    column-gap: 15px;
  }

  .masonry-container img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 15px;
    display: block;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .masonry-container img:hover {
    transform: scale(1.03);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
  }

  @media(min-width: 768px) {
    .masonry-container {
      column-count: 3;
    }
  }
</style>

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
