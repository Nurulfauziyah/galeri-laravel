<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeri Uci</title>

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css" />
    <link rel="stylesheet" href="{{ asset('assets') }}/css/lightbox.css" />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    />

    <!-- Light Box -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo2.png') }}" type="image/x-icon" />

  </head>
  <body>
    <!-- Navbar Start -->
     <nav>
    <div class="container">
      <div class="logo">
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
      </div>
      <ul class="menu">
        <li><a href="#">Beranda</a></li>
        <li><a href="{{ ('register') }}" class="register">Register</a></li>
        <li><a href="{{ ('login') }}" class="register">Login</a></li>
      </ul>
    </div>
  </nav>
 <nav class="search-navbar">
  <div class="container">
    <div class="search-box">
      
      <input type="text" placeholder="Cari Foto...">
      <button type="submit"><i class="fas fa-search" style="color: #d6395e;"></i></button>
      
    </div>
  </div>
</nav>

    <!-- Hero Section -->
     <section class="hero" id="beranda">
    <div class="containerr">
      <h1>Selamat Datang di Galeri Uci</h1>
      <p>Temukan berbagai foto yang kamu suka!</p>
      <a href="#terbaru" class="btn">Jelajahi</a>
    </div>
  </section>

  <h2  id="terbaru">Foto Terbaru</h2>
  <section class="terbaru-section" id="terbaru">
    @foreach ($gallerys as $gallery) 
    <div class="card">
       <a href="{{ Storage::url($gallery->gambar) }}" data-lightbox="models" data-title="Judul Gambar 1">
      <img src="{{ Storage::url($gallery->gambar) }}">
      </a>

      <div class="card-body">
        <p> {{ $gallery->created_at->format('M d Y') }} | By {{ $gallery->user->name }}</p>
        <h5 class="card-title">{{ $gallery->nama }}</h5>
        
      </div>
    </div>
    @endforeach

  </section>

   <footer>
      <div class="social">
        <a href="#"><i class="fa-brands fa-facebook fa-lg"></i></a>
        <a href="https://www.instagram.com/nrulfavzyh?igsh=NTc4MTIwNjQ2YQ=="><i class="fa-brands fa-instagram fa-lg"></i></a>
        <a href="https://wa.link/ng57no"><i class="fa-brands fa-whatsapp fa-lg"></i></a>
        <a href=""><i class="fa-brands fa-twitter fa-lg"></i></a>
      </div>

      <div class="links">
        <p>Temukan Berbagai Foto yang Kamu Suka!</p>
      </div>

      <div class="credit">
        <p>Created by <a href="https://github.com/Nurulfauziyah">nurulfauziyah</a>. | &copy; 2024.</p>
      </div>
    </footer>

  <!-- LightBox -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>

    <!-- Feather Icons -->
    <script>
      feather.replace();
    </script>
    <script src="{{ asset('assets') }}/js/lightbox-plus-jquery.js"></script>

   <script src="script.js"></script>
</html>
