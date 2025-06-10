<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contact Us - SPT</title>
  <link rel="stylesheet" href="{{ asset('css/contactnon.css') }}">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
</head>
<body>

  <!-- Hero Header -->
  <header class="about-hero">
    <nav class="navbar">
      <div class="logo">SPT</div>
      <ul class="nav-links">
        <li><a href="homenon">HOME</a></li>
        <li><a href="about">ABOUT SPT</a></li>
        <li><a href="homenon">OUR PRODUCT</a></li>
        <li><a href="contact" class="active">CONTACT US</a></li>
      </ul>
      <div class="auth-buttons">
        <a href="login" class="btn">Login</a>
        <a href="register" class="btn">Register</a>
      </div>
    </nav>
    <div class="hero-content">
      <h1>CONTACT US</h1>
      <p>Reach out for collaborations, support, or general inquiries.</p>
    </div>
  </header>

  <!-- Breadcrumb -->
  <div class="breadcrumb">
    <a href="#">Home</a> / <span>Contact Us</span>
  </div>

  <!-- Contact Section -->
<section class="contact-section">
  <div class="contact-container">
    <div class="contact-left">
      <h3><span>Sahabat Pakan Ternak</span><br><strong>Indonesia</strong></h3>
      <p>Have a question or need help? Send us a message — we’re here for you!</p>
      <form class="contact-form">
        <input type="text" placeholder="Name" required>
        <input type="email" placeholder="Email" required>
        <input type="tel" placeholder="Phone number" required>
        <button type="submit">KIRIM</button>
      </form>
      <div class="contact-info">
        <p><strong>PHONE</strong><br> 0812 1234 1234</p>
        <p><strong>FAX</strong><br> 0812 1234 1234</p>
        <p><strong>EMAIL</strong><br> info@sahabatpakan.co.id</p>
      </div>
    </div>
    <div class="contact-img">
      <img src="../external/pabrik.jpg" alt="Lokasi SPT">
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="footer-content">
    <div class="footer-info">
      <h3>SPT</h3>
      <p>Perusahaan peternakan terintegrasi yang memberikan produk terbaik kepada konsumen. Kami berpengalaman di bidang peternakan dengan sistem teknologi terbaru.</p>
    </div>
    <div class="footer-code">
      <img src="../external/scan.jpg" alt="QR Code" width="120" />
      <p>Scan Me</p>
    </div>
    <nav class="footer-nav">
      <a href="homenon">HOME</a>
      <a href="about">ABOUT SPT</a>
      <a href="#">OUR PRODUCT</a>
      <a href="contact">CONTACT US</a>
    </nav>
  </div>
</footer>

</body>
</html>