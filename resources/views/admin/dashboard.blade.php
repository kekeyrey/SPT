<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel SPT</title>
   <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>
<body>

<section id="admin-panel" class="page-container admin-panel-section">
  <div class="admin-panel-background">
    <img src="../external/pabrik1.jpg" alt="Factory background" class="bg-image">
    <div class="bg-overlay"></div>
  </div>
  <div class="admin-panel-content">
    <header class="admin-header">
      <div class="logo">SPT</div>
      <div class="user-actions">
        <a href="#" class="logout-button">Log Out</a>
        <div class="user-icon">
          <img src="/page/9ede0eec-2af2-4bdd-a7e8-ff4f7e183177/images/683_823.svg" alt="User">
        </div>
      </div>
    </header>
    <div class="dashboard-layout">
      <aside class="sidebar">
        <div class="search-bar">
          <input type="text" placeholder="Search">
          <img src="/page/9ede0eec-2af2-4bdd-a7e8-ff4f7e183177/images/683_810.svg" alt="Search Icon">
        </div>
        <a href="#" class="nav-item product-link">
          <span class="nav-text">Product</span>
          <img src="/page/9ede0eec-2af2-4bdd-a7e8-ff4f7e183177/images/683_816.svg" alt="Product Icon" class="nav-icon">
        </a>
        <a href="#" class="nav-item user-link">
          <span class="nav-text">User</span>
          <img src="/page/9ede0eec-2af2-4bdd-a7e8-ff4f7e183177/images/683_821.svg" alt="User Icon" class="nav-icon">
        </a>
      </aside>
      <main class="main-content-area">
        <div class="table-header-controls">
          <button class="action-button add-button">Tambah</button>
        </div>
        <table class="product-table">
          <thead>
            <tr>
              <th>No.</th>
              <th>Nama produk</th>
              <th>Deskripsi produk</th>
              <th>Harga</th>
              <th>Foto produk</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <!-- Contoh pengulangan (harusnya dinamis) -->
            <!-- Gunakan loop JS / backend untuk buat baris -->
            <tr>
              <td>1</td>
              <td>pakan babi</td>
              <td>Deskripsi produk</td>
              <td>250k</td>
              <td><img src="/page/9ede0eec-2af2-4bdd-a7e8-ff4f7e183177/images/cd1390208ac833ac0569ae4ec3666a719d9832b6.png" alt="pakan babi" class="product-image"></td>
              <td>
                <button class="action-button edit-button">Edit</button>
                <button class="action-button delete-button">Delete</button>
              </td>
            </tr>
            <!-- Salin baris sesuai kebutuhan -->
          </tbody>
        </table>
      </main>
    </div>
  </div>
</section>

<footer id="page-footer" class="page-container site-footer"> 
  <div class="footer-content-wrapper">
    <div class="footer-left">
      <div class="footer-logo">SPT</div> 
      <div class="about-spt">
        <h3>Tentang SPT</h3> 
        <p>Perusahaan Peternakan terintegrasi yang memberikan produk terbaik kepada konsumen. Kami berpengalaman di bidang peternakan dengan sistem teknologi terbaru, serta spesialis dalam bidang produksi hasil pertanian dan peternakan.</p>
      </div>
    </div>
    <nav class="footer-nav"> 
      <a href="#home">HOME</a>
      <a href="#about">ABOUT SPT</a>
      <a href="#product">OUR PRODUCT</a>
      <a href="#contact">CONTACT US</a>
    </nav>
  </div>
</footer>

</body>
</html>
