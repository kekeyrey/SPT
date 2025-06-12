<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SPT - Sahabat Pakan Ternak</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/homenon.css') }}">
  <style>
    /* Reset & Font */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Poppins', sans-serif;
      color: white;
    }

    /* Hero Section */
    .hero-section {
      background: url('../external/nav.jpg') no-repeat center center/cover;
      height: 100vh;
      position: relative;
      overflow: hidden;
    }

    .hero-section::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      height: 100px;
      width: 100%;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, #ffffff 100%);
      z-index: 1;
    }

    /* Navbar */
    .navbar {
      position: absolute;
      top: 0;
      width: 100%;
      padding: 15px 60px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgba(0, 0, 0, 0.2);
      backdrop-filter: blur(8px);
      z-index: 10;
    }

    .logo {
      font-size: 28px;
      font-weight: bold;
      color: #00ffff;
    }

    .nav-links {
      list-style: none;
      padding-right: 32%;
      display: flex;
      gap: 30px;
    }

    .nav-links a {
      text-decoration: none;
      color: white;
      font-weight: 600;
      transition: 0.3s;
      padding-bottom: 4px;
    }

    .nav-links a:hover,
    .nav-links a.active {
      color: #00ffff;
      border-bottom: 2px solid #00ffff;
    }

    /* Hero Text */
    .hero-text {
      position: absolute;
      bottom: 40%;
      left: 50%;
      transform: translateX(-50%);
      text-align: center;
      z-index: 2;
    }
    .hero-text h1 {
      font-size: 48px;
      font-weight: 700;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.6);
      line-height: 1.3;
    }

    /* About Section */
    .about {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      padding: 4rem 2rem;
      align-items: center;
      justify-content: center;
      background: white;
    }
    .about-gallery {
      flex: 1 1 400px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px;
      max-width: 450px;
    }
    .img-shape img {
      width: 100%;
      height: auto;
      object-fit: cover;
      border-radius: 20px;
    }
    .shape-top {
      grid-column: span 2;
    }
    .about-text {
      flex: 1 1 400px;
      max-width: 600px;
    }
    .about-text h2 {
      color: #00cce0;
      font-size: 28px;
      margin-bottom: 1rem;
      font-weight: 700;
    }
    .about-text p {
      color: #333;
      font-size: 16px;
      margin-bottom: 1rem;
      line-height: 1.6;
    }

    /* Filter Section */
    .filter-section {
      text-align: center;
      padding: 1rem;
    }
    .filter-section button {
      padding: 0.5rem 1rem;
      margin: 0.3rem;
      border: 1px solid #00cccc;
      background: white;
      color: #00cccc;
      cursor: pointer;
      transition: 0.3s;
      border-radius: 5px;
    }
    .filter-section button:hover {
      background-color: #00cccc;
      color: white;
    }

    /* Produk */
    .product-list {
      display: flex;
      justify-content: center;
      gap: 1rem;
      padding: 2rem;
      flex-wrap: wrap;
    }
    .product-card {
      text-align: center;
      padding: 1rem;
      border: 1px solid #ddd;
      border-radius: 10px;
      transition: 0.3s;
      background-color: white;
      max-width: 180px;
    }
    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .product-card img {
      width: 100px;
      height: 100px;
      object-fit: cover;
    }

    .product-name {
      font-size: 14px;
      font-weight: 600;
      color: #333;
      margin-top: 5px;
    }

    .product-price {
      font-size: 14px;
      color: #009688;
      font-weight: 600;
      margin-top: 4px;
    }

    .product-desc {
      font-size: 12px;
      color: #555;
    }

    /* Footer */
    .footer-top {
      background-color: #f9f9f9;
      text-align: center;
      padding: 2rem;
      font-weight: 500;
      color: black;
    }
    footer {
      background-color: #003333;
      color: white;
      padding: 2rem;
    }
    .footer-content {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }
    .footer-nav a {
      display: block;
      margin-bottom: 0.5rem;
      color: #ffffff;
      text-decoration: none;
      transition: 0.3s;
    }
    .footer-nav a:hover {
      color: #00cccc;
    }

    /* Modern Popup Styles - Updated to White Background */
    .popup-overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.8);
      backdrop-filter: blur(10px);
      z-index: 9999;
      opacity: 0;
      transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .popup-overlay.show {
      opacity: 1;
    }

    .popup-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%) scale(0.7);
      width: 90%;
      max-width: 900px;
      max-height: 90vh;
      overflow-y: auto;
      transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
    }

    .popup-overlay.show .popup-container {
      transform: translate(-50%, -50%) scale(1);
    }

    .popup-content {
      background: white;
      border-radius: 20px;
      box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
      overflow: hidden;
      position: relative;
    }

    .popup-header {
      background: white;
      padding: 20px 30px;
      border-bottom: 1px solid rgba(0,0,0,0.1);
      position: relative;
    }

    .popup-close {
      position: absolute;
      top: 15px;
      right: 20px;
      width: 40px;
      height: 40px;
      border: none;
      background: rgba(0, 0, 0, 0.1);
      color: #333;
      border-radius: 50%;
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      transition: all 0.3s ease;
    }

    .popup-close:hover {
      background: rgba(0, 0, 0, 0.2);
      transform: rotate(90deg);
    }

    .popup-body {
      padding: 30px;
      display: grid;
      grid-template-columns: 1fr 1.5fr;
      gap: 30px;
      align-items: start;
      background: white;
    }

    .popup-image-section {
      position: relative;
    }

    .popup-image {
      width: 100%;
      height: 300px;
      object-fit: cover;
      border-radius: 15px;
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease;
    }

    .popup-image:hover {
      transform: scale(1.05);
    }

    .popup-details {
      color: #333;
    }

    .popup-title {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 20px;
      color: #333;
      text-shadow: none;
    }

    .detail-card {
      background: #f8f9fa;
      border-radius: 12px;
      padding: 15px 20px;
      margin-bottom: 15px;
      border: 1px solid rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }

    .detail-card:hover {
      background: #e9ecef;
      transform: translateX(5px);
    }

    .detail-label {
      font-size: 14px;
      font-weight: 600;
      color: #666;
      margin-bottom: 5px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .detail-value {
      font-size: 16px;
      font-weight: 500;
      color: #333;
      line-height: 1.5;
    }

    .price-highlight {
      font-size: 24px;
      font-weight: 700;
      color: #00cc6a;
      text-shadow: none;
    }

    .popup-actions {
      padding: 20px 30px;
      background: #f8f9fa;
      display: flex;
      gap: 15px;
      justify-content: flex-end;
    }

    .btn-preorder {
      background: linear-gradient(135deg, #00ff88, #00cc6a);
      color: white;
      border: none;
      padding: 15px 30px;
      border-radius: 50px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 8px 25px rgba(0,255,136,0.3);
      display: flex;
      align-items: center;
      gap: 10px;
    }

    .btn-preorder:hover {
      transform: translateY(-3px);
      box-shadow: 0 15px 35px rgba(0,255,136,0.4);
    }

    .btn-preorder:active {
      transform: translateY(-1px);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .popup-container {
        width: 95%;
        margin: 20px;
      }
      
      .popup-body {
        grid-template-columns: 1fr;
        gap: 20px;
        padding: 20px;
        background: white;
      }
      
      .popup-image {
        height: 250px;
      }
      
      .popup-title {
        font-size: 24px;
      }
      
      .popup-actions {
        padding: 15px 20px;
        background: #f8f9fa;
      }
      
      .btn-preorder {
        width: 100%;
        justify-content: center;
      }
    }

    /* Animation for cards */
    .detail-card {
      animation: slideInRight 0.5s ease-out;
      animation-fill-mode: backwards;
    }

    .detail-card:nth-child(1) { animation-delay: 0.1s; }
    .detail-card:nth-child(2) { animation-delay: 0.2s; }
    .detail-card:nth-child(3) { animation-delay: 0.3s; }
    .detail-card:nth-child(4) { animation-delay: 0.4s; }

    @keyframes slideInRight {
      from {
        opacity: 0;
        transform: translateX(30px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    /* Scrollbar styling for popup */
    .popup-container::-webkit-scrollbar {
      width: 8px;
    }

    .popup-container::-webkit-scrollbar-track {
      background: rgba(0,0,0,0.1);
      border-radius: 10px;
    }

    .popup-container::-webkit-scrollbar-thumb {
      background: rgba(0,0,0,0.3);
      border-radius: 10px;
    }

    .popup-container::-webkit-scrollbar-thumb:hover {
      background: rgba(0,0,0,0.5);
    }
  </style>
</head>
<body>

  <header class="hero-section">
    <div class="navbar">
      <div class="logo">SPT</div>
      <ul class="nav-links">
        <li><a href="{{ url('homenon') }}" class="active">HOME</a></li>
        <li><a href="{{ url('about') }}">ABOUT SPT</a></li>
        <li><a href="#">OUR PRODUCT</a></li>
      </ul>
    </div>

    <div class="hero-text">
      <h1>SAHABAT<br>PAKAN TERNAK</h1>
    </div>
  </header>

  <section class="about">
    <div class="about-gallery">
      <div class="img-shape shape-top">
        <img src="{{ asset('external/pakan1.jpg') }}" alt="Pakan 1">
      </div>
      <div class="img-shape shape-bottom-left">
        <img src="{{ asset('external/pakan2.jpg') }}" alt="Pakan 2">
      </div>
      <div class="img-shape shape-bottom-right">
        <img src="{{ asset('external/pakan4.jpg') }}" alt="Pakan 3">
      </div>
    </div>
    <div class="about-text">
      <h2>Sahabat Pakan Ternak</h2>
      <p>Sahabat Pakan Ternak adalah usaha yang bergerak di bidang penyediaan bahan baku pakan ternak, khususnya polar, biskuit, dan susu, yang diformulasikan untuk memenuhi kebutuhan nutrisi ternak secara optimal.</p>
      <p>Kami memahami bahwa kualitas pakan sangat menentukan kesehatan, pertumbuhan, dan produktivitas ternak, oleh karena itu kami menghadirkan bahan-bahan pilihan dengan standar mutu tinggi dan harga yang kompetitif.</p>
    </div>
  </section>

  <section class="filter-section">
    <button onclick="filterProduk('all')" class="filter-btn active">All</button>
    <button onclick="filterProduk('Produk Jadi')" class="filter-btn">Produk Jadi</button>
    <button onclick="filterProduk('Bahan Pakan Baku')" class="filter-btn">Bahan Baku Pakan</button>
  </section>

  <section class="product-list">
    @if(isset($products) && count($products) > 0)
      @foreach($products as $product)
        @php
          $kategori = match($product->category_id) {
            1 => 'Produk Jadi',
            2 => 'Bahan Pakan Baku',
            default => 'lainnya'
          };
        @endphp

        <div class="product-card" data-kategori="{{ $kategori }}" onclick="openPopup('{{ addslashes($product->name ?? 'Produk') }}', '{{ addslashes($product->komposisi ?? 'Tidak tersedia') }}', '{{ addslashes($product->petunjuk_pemakaian ?? 'Tidak tersedia') }}', '{{ addslashes($product->minimal_order ?? '-') }}', '{{ $product->image ? asset('storage/products/' . $product->image) : asset('images/default-product.png') }}')">
          <img src="{{ $product->image ? asset('storage/products/' . $product->image) : asset('images/default-product.png') }}" 
               alt="{{ $product->name ?? 'Produk' }}" class="product-image">
          <p class="product-name">{{ $product->name ?? 'Nama tidak tersedia' }}</p>
          <p class="product-desc">{{ $product->minimal_order ?? 'Minimal order tidak tersedia' }}</p>
        </div>
      @endforeach
    @else
      <p style="text-align:center; margin: 2rem auto;">Tidak ada produk tersedia.</p>
    @endif
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
      </nav>
    </div>
  </footer>

  <!-- Modern Popup Modal -->
  <div id="productModal" class="popup-overlay">
    <div class="popup-container">
      <div class="popup-content">
        <div class="popup-header">
          <button class="popup-close" onclick="closePopup()">&times;</button>
        </div>
        
        <div class="popup-body">
          <div class="popup-image-section">
            <img id="modalImage" class="popup-image" src="" alt="Product">
          </div>
          
          <div class="popup-details">
            <h2 id="modalTitle" class="popup-title">Nama Produk</h2>
            
            <div class="detail-card">
              <div class="detail-label">Minimal Order</div>
              <div id="modalMinimal" class="detail-value">-</div>
            </div>
            
            <div class="detail-card">
              <div class="detail-label">Komposisi Bahan</div>
              <div id="modalKomposisi" class="detail-value">-</div>
            </div>
            
            <div class="detail-card">
              <div class="detail-label">Petunjuk Penggunaan</div>
              <div id="modalPetunjuk" class="detail-value">-</div>
            </div>
          </div>
        </div>
        
        <div class="popup-actions">
          <button class="btn-preorder" onclick="preOrder()">
            <span>💬</span> Pre-Order Sekarang
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    console.log('Script loaded');

    // Filter products
    function filterProduk(kategori) {
      console.log('Filter called:', kategori);
      const cards = document.querySelectorAll('.product-card');
      const buttons = document.querySelectorAll('.filter-btn');
      
      // Update active button
      buttons.forEach(btn => btn.classList.remove('active'));
      event.target.classList.add('active');
      
      // Filter cards
      cards.forEach(card => {
        const cardKategori = card.getAttribute('data-kategori');
        if (kategori === 'all' || cardKategori === kategori) {
          card.style.display = 'block';
        } else {
          card.style.display = 'none';
        }
      });
    }

    // Open popup with smooth animation
    function openPopup(name, komposisi, petunjuk, minimal, image) {
      console.log('Opening popup for:', name);
      
      // Set modal content
      document.getElementById('modalTitle').textContent = name;
      document.getElementById('modalKomposisi').textContent = komposisi;
      document.getElementById('modalPetunjuk').textContent = petunjuk;
      document.getElementById('modalMinimal').textContent = minimal;
      document.getElementById('modalImage').src = image;
      
      // Show modal with animation
      const modal = document.getElementById('productModal');
      modal.style.display = 'block';
      document.body.style.overflow = 'hidden';
      
      // Trigger animation
      setTimeout(() => {
        modal.classList.add('show');
      }, 10);
    }

    // Close popup with smooth animation
    function closePopup() {
      console.log('Closing popup');
      const modal = document.getElementById('productModal');
      
      modal.classList.remove('show');
      
      setTimeout(() => {
        modal.style.display = 'none';
        document.body.style.overflow = 'auto';
      }, 300);
    }

    // Pre-order function
    function preOrder() {
      const productName = document.getElementById('modalTitle').textContent;
      const message = `Halo, saya tertarik untuk pre-order produk: ${productName}`;
      const whatsappUrl = `https://wa.me/6281234567890?text=${encodeURIComponent(message)}`;
      window.open(whatsappUrl, '_blank');
    }

    // Close popup when clicking outside
    document.getElementById('productModal').addEventListener('click', function(event) {
      if (event.target === this) {
        closePopup();
      }
    });

    // Close popup with Escape key
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape') {
        closePopup();
      }
    });

    // Initialize page
    window.addEventListener('load', function() {
      console.log('Page loaded, popup ready');
    });
  </script>
</body>
</html>