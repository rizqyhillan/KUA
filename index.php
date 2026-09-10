<!DOCTYPE html>
<html lang="id">
<head>  
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KUA Kalisat Jember - Portal Layanan Publik</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="include/style/header.css" />
  <link rel="stylesheet" href="include/style/footer.css" />
</head>
<body>
  <?php include 'include/header1.php'; ?>

  <!-- Announcement Ticker -->
  <div class="text-jalan">
    <div class="jalanan">
      Selamat Datang di Portal Resmi KUA Kecamatan Kalisat Kabupaten Jember
    </div>
  </div>

  <!-- Hero Welcome Banner -->
  <section class="hero-banner">
    <div class="hero-container">
      <h1 class="hero-title">Layanan Keagamaan & Pernikahan Cepat, Mudah, dan Transparan</h1>
      <p class="hero-subtitle">
        Pusat pelayanan masyarakat terpadu untuk pencatatan nikah, konsultasi hukum Islam, bimbingan keluarga, serta layanan perwakafan.
      </p>

      <!-- Floating Search Bar -->
      <div class="search-wrapper">
        <div class="search-box">
          <svg class="search-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
          <input type="text" id="searchInput" placeholder="Cari layanan..." autocomplete="off" />
          <!-- <button id="searchBtn" type="button">Cari Layanan</button> -->
        </div>
        
        <!-- Live Search Dropdown -->
        <ul class="search-results" id="searchResults"></ul>
      </div>
    </div>
  </section>

  <!-- Main Content Area -->
  <main class="main-container">
    <div class="section-header">
      <div>
        <h2 class="section-title">Kategori Layanan Utama</h2>
        <p class="section-desc">Pilih kategori layanan di bawah ini untuk mengakses detail informasi dan pendaftaran</p>
      </div>
    </div>

    <!-- Redesigned Grid Box -->
    <section class="info">
      <a class="kartu">
        <div class="kartu-top">
          <div class="icon-box">
            <img src="assets/info.svg" alt="Info Nikah" />
          </div>
          <span class="kartu-badge">Layanan Utama</span>
        </div>
        <div class="kartu-body">
          <h3>INFO NIKAH</h3>
          <p>Pendaftaran nikah online, syarat administrasi, isbat nikah, & duplikat buku nikah.</p>
        </div>
        <div class="kartu-footer">
          <span>Buka Layanan</span>
          <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </div>
      </a>

      <a class="kartu">
        <div class="kartu-top">
          <div class="icon-box">
            <img src="assets/prosedur.svg" alt="Prosedur Layanan" />
          </div>
          <span class="kartu-badge">Panduan</span>
        </div>
        <div class="kartu-body">
          <h3>PROSEDUR LAYANAN KUA</h3>
          <p>Alur pendaftaran SIMKAH, tata cara pencatatan rujuk, hingga alur pelaporan wakaf.</p>
        </div>
        <div class="kartu-footer">
          <span>Buka Layanan</span>
          <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </div>
      </a>

      <a class="kartu">
        <div class="kartu-top">
          <div class="icon-box">
            <img src="assets/konsultasi.svg" alt="Konsultasi" />
          </div>
          <span class="kartu-badge">Konsultasi</span>
        </div>
        <div class="kartu-body">
          <h3>FIQIH PERNIKAHAN</h3>
          <p>Konsultasi langsung dengan petugas KUA terkait keluarga sakinah & hukum Islam.</p>
        </div>
        <div class="kartu-footer">
          <span>Buka Layanan</span>
          <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </div>
      </a>

      <a class="kartu">
        <div class="kartu-top">
          <div class="icon-box">
            <img src="assets/artikel.svg" alt="Berita" />
          </div>
          <span class="kartu-badge">Informasi</span>
        </div>
        <div class="kartu-body">
          <h3>BERITA & ARTIKEL</h3>
          <p>Kumpulan artikel keagamaan, kabar seputar kegiatan KUA Kalisat, dan pengumuman.</p>
        </div>
        <div class="kartu-footer">
          <span>Buka Layanan</span>
          <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </div>
      </a>

      <a class="kartu">
        <div class="kartu-top">
          <div class="icon-box">
            <img src="assets/galeri.svg" alt="Galeri" />
          </div>
          <span class="kartu-badge">Dokumentasi</span>
        </div>
        <div class="kartu-body">
          <h3>GALERI & DOKUMENTASI</h3>
          <p>Dokumentasi foto dan video kegiatan operasional serta pelayanan masyarakat KUA.</p>
        </div>
        <div class="kartu-footer">
          <span>Buka Layanan</span>
          <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </div>
      </a>

      <a class="kartu">
        <div class="kartu-top">
          <div class="icon-box">
            <img src="assets/dokumen.svg" alt="Dokumen" />
          </div>
          <span class="kartu-badge">Regulasi</span>
        </div>
        <div class="kartu-body">
          <h3>DOKUMEN & REGULASI</h3>
          <p>Unduh formulir pendaftaran nikah, PMA, Perdirjen, dan berkas regulasi resmi.</p>
        </div>
        <div class="kartu-footer">
          <span>Buka Layanan</span>
          <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </div>
      </a>
    </section>
  </main>

  <!-- Overlay & Bottom Sheet Modal -->
  <div class="overlay" id="overlay"></div>
  <div class="bottom-sheet" id="bottomSheet">
    <div class="sheet-header">
      <h3 id="sheet-title">Judul Menu</h3>
      <button id="closeSheet" aria-label="Tutup">✕</button>
    </div>
    <div class="sheet-content" id="sheet-content">
      <p>Memuat daftar pilihan...</p>
    </div>
  </div>

  <?php include 'include/footer1.php'; ?>
  <script src="overlay.js"></script>
</body>
</html>