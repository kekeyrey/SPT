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
    <button onclick="filterProduk('all')">All</button>
    <button onclick="filterProduk('jadi')">Produk Jadi</button>
    <button onclick="filterProduk('bahan')">Bahan Baku Pakan</button>
  </section>

<section class="product-list">
  <div class="product-card" data-kategori="jadi"
       onclick="showPopup('Pakan Babi', '100% Biskuit', 'Campurkan dengan dedak atau konsentrat')">
    <img src="../external/Pakan babi.png" alt="Pakan Babi">
    <p class="product-name">Pakan Babi</p>
    <p class="product-price">Rp 3.500.000 / Ton</p>
    <p class="product-desc">Min. order 5 Ton</p>
  </div>

  <div class="product-card" data-kategori="bahan"
       onclick="showPopup('Tepung Wafer', '100% Roti & Biskuit', 'Campurkan dengan air hingga homogen')">
    <img src="../external/Tepung Wafer Biskuit dan roti.png" alt="Tepung Wafer">
    <p class="product-name">Tepung Wafer</p>
    <p class="product-price">Rp 50.000.000</p>
    <p class="product-desc">Min. 10 Ton – Free Ongkir Jawa-Bali</p>
  </div>

  <div class="product-card" data-kategori="bahan"
       onclick="showPopup('Bubuk Richeese', 'Bubuk keju kering', 'Taburkan ke pakan utama')">
    <img src="../external/Bubuk Richeese.png" alt="Bubuk Richeese">
    <p class="product-name">Bubuk Richeese</p>
    <p class="product-price">Rp 5.000.000</p>
    <p class="product-desc">Min. 1 Ton</p>
  </div>

  <div class="product-card" data-kategori="bahan"
       onclick="showPopup('Polar Wheat Bran', 'Bekatul gandum', 'Langsung campurkan dengan pakan ternak')">
    <img src="../external/Polar Wheat Bran.png" alt="Polar Wheat Bran">
    <p class="product-name">Polar Wheat Bran</p>
    <p class="product-price">Rp 60.200.000</p>
    <p class="product-desc">Min. 14 Ton (Tanjung Perak Surabaya)</p>
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

  <!-- Popup -->
<div class="popup" id="popup">
  <div class="popup-content">
    <span class="close" onclick="hidePopup()">&times;</span>
    <div class="popup-grid">
      <img id="popup-img" src="" alt="popup" />
      <div class="popup-text">
        <h3 id="popup-title">Nama Produk</h3>
        <p><strong>Harga:</strong> <span id="popup-price"></span></p>
        <p><strong>Minimal Order:</strong> <span id="popup-desc"></span></p>
        <p><strong>Bahan Pakan:</strong></p>
        <p id="popup-bahan">-</p>
        <p><strong>Cara Penggunaan:</strong></p>
        <p id="popup-penggunaan">-</p>
        <button class="order-btn">Pre-Order</button>
      </div>
    </div>
  </div>
</div>


<script>
  function filterProduk(kategori) {
    const cards = document.querySelectorAll('.product-card');
    cards.forEach(card => {
      const k = card.getAttribute('data-kategori');
      card.style.display = (kategori === 'all' || k === kategori) ? 'block' : 'none';
    });
  }

  function showPopup(title, bahan, penggunaan) {
    document.getElementById('popup').style.display = 'flex';
    document.getElementById('popup-title').innerText = title;
    document.getElementById('popup-bahan').innerText = bahan;
    document.getElementById('popup-penggunaan').innerText = penggunaan;
    document.getElementById('popup-img').src = document.querySelector(`[onclick*="${title}"] img`).src;
  }

  function hidePopup() {
    document.getElementById('popup').style.display = 'none';
  }
</script>

</body>
</html>