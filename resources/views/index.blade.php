<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SPT - Sahabat Pakan Ternak</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <style>
    html {
      font-family: 'Poppins', sans-serif;
      font-size: 16px;
      scroll-behavior: smooth;
    }
    body {
      margin: 0;
      padding: 0;
      background-color: #ffffff;
      color: #000000;
    }
    .container, .hero-section, .company-intro-section,
    .products-section, .commitment-section, .site-footer {
      max-width: 1440px;
      margin: 0 auto;
    }
  </style>
</head>
<body>

  <!-- HERO SECTION -->
  <section id="section-hero" class="hero-section">
    <div class="hero-background">
      <img src="{{ asset('images/nav.jpg') }}" alt="Aerial view of factory" class="hero-bg-image">
      <img src="{{ asset('images/hero-overlay.svg') }}" alt="Background overlay" class="hero-svg-overlay">
    </div>
    <header class="main-header">
      <div class="logo">
        <span class="logo-text-spt">SPT</span>
      </div>
      <nav class="main-nav">
        <a href="#section-hero" class="nav-link active">HOME</a>
        <a href="#section-company-intro" class="nav-link">ABOUT SPT</a>
        <a href="#section-products" class="nav-link">OUR PRODUCT</a>
        <a href="#section-contact" class="nav-link">CONTACT US</a>
      </nav>
      <div class="auth-buttons">
        <button type="button" class="auth-button login-button">Login</button>
        <button type="button" class="auth-button register-button">Register</button>
      </div>
    </header>
    <div class="hero-content">
      <h1 class="hero-title">SAHABAT <br>PAKAN TERNAK</h1>
    </div>
  </section>

  <!-- COMPANY INTRO SECTION -->
  <section id="section-company-intro" class="company-intro-section">
    <div class="company-intro-container">
      <div class="intro-images-column">
        <div class="merged-image-container">
          <img src="{{ asset('images/img-gudang.png') }}" alt="Gudang pakan" class="intro-image img-gudang">
          <img src="{{ asset('images/img-pakan1.png') }}" alt="Pakan ternak 1" class="intro-image img-pakan1">
          <img src="{{ asset('images/img-pakan2.png') }}" alt="Pakan ternak 2" class="intro-image img-pakan2">
        </div>
      </div>
      <div class="intro-text-column">
        <h2 class="intro-title">Sahabat Pakan Ternak</h2>
        <p class="intro-description">
          Sahabat Pakan Ternak adalah usaha yang bergerak di bidang penyediaan bahan baku pakan ternak, khususnya polar, biskuit, dan susu, yang diformulasikan untuk memenuhi kebutuhan nutrisi ternak secara optimal.
          <br><br>
          Kami memahami bahwa kualitas pakan sangat menentukan kesehatan, pertumbuhan, dan produktivitas ternak, oleh karena itu kami menghadirkan bahan-bahan pilihan dengan standar mutu tinggi dan harga yang kompetitif.
        </p>
      </div>
    </div>
  </section>

  <!-- PRODUCTS SECTION -->
  <section id="section-products" class="products-section">
    <div class="products-container">
      <div class="product-filters">
        <button type="button" class="filter-button active">All</button>
        <button type="button" class="filter-button">Pakan Jadi</button>
        <button type="button" class="filter-button">Bahan Baku Pakan</button>
      </div>
      <div class="product-grid">
        <div class="product-card">
          <img src="{{ asset('images/pakan-babi.png') }}" alt="Bahan Pakan Babi" class="product-image">
          <p class="product-name">Bahan Pakan Babi</p>
        </div>
        <div class="product-card">
          <img src="{{ asset('images/biskuit.png') }}" alt="Biskuit" class="product-image">
          <p class="product-name">Biskuit</p>
        </div>
        <div class="product-card">
          <img src="{{ asset('images/susu.png') }}" alt="Susu" class="product-image">
          <p class="product-name">Susu</p>
        </div>
        <div class="product-card">
          <img src="{{ asset('images/polar.png') }}" alt="Polar" class="product-image">
          <p class="product-name">Polar</p>
        </div>
      </div>
    </div>
  </section>

  <!-- COMMITMENT SECTION -->
  <section id="section-commitment" class="commitment-section">
    <div class="commitment-container">
      <p class="commitment-text">
        Kami hadir untuk memenuhi kebutuhan para peternak Indonesia dengan menyediakan produk ternak yang diproduksi dengan sistem teknologi termutakhir.
      </p>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="section-footer" class="site-footer">
    <div class="footer-container">
      <div class="footer-about">
        <span class="footer-logo-text-spt">SPT</span>
        <h3 class="footer-about-title">Tentang SPT</h3>
        <p class="footer-about-description">
          Perusahaan peternakan terintegrasi yang memberikan produk terbaik kepada konsumen. Kami berpengalaman di bidang peternakan dengan sistem teknologi terbaru, serta spesialis dalam produksi hasil pertanian dan peternakan.
        </p>
      </div>
      <nav class="footer-nav">
        <a href="#section-hero" class="footer-nav-link">HOME</a>
        <a href="#section-company-intro" class="footer-nav-link">ABOUT SPT</a>
        <a href="#section-products" class="footer-nav-link">OUR PRODUCT</a>
        <a href="#section-contact" class="footer-nav-link">CONTACT US</a>
      </nav>
    </div>
  </footer>

</body>
</html>
