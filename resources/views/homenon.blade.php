<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>SPT - Sahabat Pakan Ternak</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/homenon.css') }}">
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
          <!-- <p class="product-desc">{{ $product->minimal_order ?? 'Minimal order tidak tersedia' }}</p> -->
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
        <a href="homenon">HOME</a>
        <a href="about">ABOUT SPT</a>
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