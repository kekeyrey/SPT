<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SPT - Sahabat Pakan Ternak</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/homenon.css') }}">
</head>
<body>

  <header class="hero-section">
    <div class="navbar">
      <div class="logo">SPT</div>
      <ul class="nav-links">
        <li><a href="homenon" class="active">HOME</a></li>
        <li><a href="about">ABOUT SPT</a></li>
        <li><a href="#">OUR PRODUCT</a></li>
        <li><a href="contact">CONTACT US</a></li>
      </ul>
      <div class="auth-buttons">
        <a href="#" class="btn">Login</a>
        <a href="#" class="btn">Register</a>
      </div>
    </div>

    <div class="hero-text">
      <h1>SAHABAT<br>PAKAN TERNAK</h1>
    </div>
  </header>

  <section class="about">
    <div class="about-gallery">
      <div class="img-shape shape-top">
        <img src="external/pakan1.jpg" alt="Pakan 1">
      </div>
      <div class="img-shape shape-bottom-left">
        <img src="external/pakan2.jpg" alt="Pakan 2">
      </div>
      <div class="img-shape shape-bottom-right">
        <img src="external/pakan4.jpg" alt="Pakan 3">
      </div>
    </div>
    <div class="about-text">
      <h2>Sahabat Pakan Ternak</h2>
      <p>Sahabat Pakan Ternak adalah usaha yang bergerak di bidang penyediaan bahan baku pakan ternak, khususnya polar, biskuit, dan susu, yang diformulasikan untuk memenuhi kebutuhan nutrisi ternak secara optimal.</p>
      <p>Kami memahami bahwa kualitas pakan sangat menentukan kesehatan, pertumbuhan, dan produktivitas ternak, oleh karena itu kami menghadirkan bahan-bahan pilihan dengan standar mutu tinggi dan harga yang kompetitif.</p>
    </div>
  </section>

  <section class="filter-section">
    <button>All</button>
    <button>Produk Jadi</button>
    <button>Bahan Baku Pakan</button>
  </section>

  <section class="product-list">
    <div class="product-card">
      <img src="external/pakan1.jpg" alt="produk 1" />
      <p>Produk 1</p>
    </div>
    <div class="product-card">
      <img src="external/pakan2.jpg" alt="produk 2" />
      <p>Produk 2</p>
    </div>
    <div class="product-card">
      <img src="external/pakan3.jpg" alt="produk 3" />
      <p>Produk 3</p>
    </div>
    <div class="product-card">
      <img src="external/pakan4.jpg" alt="produk 4" />
      <p>Produk 4</p>
    </div>
  </section>

  <section class="footer-top">
    <p>Kami hadir untuk memenuhi kebutuhan para peternak Indonesia dengan menyediakan produk ternak yang diproduksi dengan sistem teknologi termutakhir.</p>
  </section>

  <footer>
    <div class="footer-content">
      <p><strong>SPT</strong><br>
      Teman SPT<br>
      Menyediakan Pakan terbaik<br>
      yang berkualitas tinggi<br>
      untuk peternakan Anda<br>
      melalui inovasi teknologi dan<br>
      pengelolaan yang profesional.</p>
      <nav class="footer-nav">
        <a href="#">HOME</a>
        <a href="#">ABOUT SPT</a>
        <a href="#">OUR PRODUCT</a>
        <a href="#">CONTACT US</a>
      </nav>
    </div>
  </footer>

</body>
</html>
