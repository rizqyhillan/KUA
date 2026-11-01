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
  <?php include __DIR__ . '/include/header.php'; ?>

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
          <input type="search" id="searchInput" placeholder="Cari layanan..." aria-label="Cari layanan" aria-controls="searchResults" autocomplete="off" />
          <!-- <button id="searchBtn" type="button">Cari Layanan</button> -->
        </div>
        
        <!-- Live Search Dropdown -->
        <ul class="search-results" id="searchResults" aria-label="Hasil pencarian layanan"></ul>
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
      <button type="button" class="kartu" data-category="INFO NIKAH" aria-haspopup="dialog" aria-controls="bottomSheet" aria-expanded="false" aria-labelledby="service-title-1">
        <span class="kartu-top">
          <span class="icon-box">
            <img src="assets/info.svg" alt="Info Nikah" />
          </span>
          <span class="kartu-badge">Layanan Utama</span>
        </span>
        <span class="kartu-body">
          <span class="kartu-title" id="service-title-1">INFO NIKAH</span>
          <span class="kartu-desc">Pendaftaran nikah online, syarat administrasi, isbat nikah, & duplikat buku nikah.</span>
        </span>
        <span class="kartu-footer">
          <span>Buka Layanan</span>
          <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </span>
      </button>

      <button type="button" class="kartu" data-category="PROSEDUR LAYANAN KUA" aria-haspopup="dialog" aria-controls="bottomSheet" aria-expanded="false" aria-labelledby="service-title-2">
        <span class="kartu-top">
          <span class="icon-box">
            <img src="assets/prosedur.svg" alt="Prosedur Layanan" />
          </span>
          <span class="kartu-badge">Panduan</span>
        </span>
        <span class="kartu-body">
          <span class="kartu-title" id="service-title-2">PROSEDUR LAYANAN KUA</span>
          <span class="kartu-desc">Alur pendaftaran SIMKAH, tata cara pencatatan rujuk, hingga alur pelaporan wakaf.</span>
        </span>
        <span class="kartu-footer">
          <span>Buka Layanan</span>
          <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </span>
      </button>

      <button type="button" class="kartu" data-category="FIQIH PERNIKAHAN" aria-haspopup="dialog" aria-controls="bottomSheet" aria-expanded="false" aria-labelledby="service-title-3">
        <span class="kartu-top">
          <span class="icon-box">
            <img src="assets/konsultasi.svg" alt="Konsultasi" />
          </span>
          <span class="kartu-badge">Konsultasi</span>
        </span>
        <span class="kartu-body">
          <span class="kartu-title" id="service-title-3">FIQIH PERNIKAHAN</span>
          <span class="kartu-desc">Konsultasi langsung dengan petugas KUA terkait keluarga sakinah & hukum Islam.</span>
        </span>
        <span class="kartu-footer">
          <span>Buka Layanan</span>
          <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </span>
      </button>

      <button type="button" class="kartu" data-category="BERITA &amp; ARTIKEL" aria-haspopup="dialog" aria-controls="bottomSheet" aria-expanded="false" aria-labelledby="service-title-4">
        <span class="kartu-top">
          <span class="icon-box">
            <img src="assets/artikel.svg" alt="Berita" />
          </span>
          <span class="kartu-badge">Informasi</span>
        </span>
        <span class="kartu-body">
          <span class="kartu-title" id="service-title-4">BERITA & ARTIKEL</span>
          <span class="kartu-desc">Kumpulan artikel keagamaan, kabar seputar kegiatan KUA Kalisat, dan pengumuman.</span>
        </span>
        <span class="kartu-footer">
          <span>Buka Layanan</span>
          <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </span>
      </button>

      <button type="button" class="kartu" data-category="GALERI &amp; DOKUMENTASI" aria-haspopup="dialog" aria-controls="bottomSheet" aria-expanded="false" aria-labelledby="service-title-5">
        <span class="kartu-top">
          <span class="icon-box">
            <img src="assets/galeri.svg" alt="Galeri" />
          </span>
          <span class="kartu-badge">Dokumentasi</span>
        </span>
        <span class="kartu-body">
          <span class="kartu-title" id="service-title-5">GALERI & DOKUMENTASI</span>
          <span class="kartu-desc">Dokumentasi foto dan video kegiatan operasional serta pelayanan masyarakat KUA.</span>
        </span>
        <span class="kartu-footer">
          <span>Buka Layanan</span>
          <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </span>
      </button>

      <button type="button" class="kartu" data-category="DOKUMEN &amp; REGULASI" aria-haspopup="dialog" aria-controls="bottomSheet" aria-expanded="false" aria-labelledby="service-title-6">
        <span class="kartu-top">
          <span class="icon-box">
            <img src="assets/dokumen.svg" alt="Dokumen" />
          </span>
          <span class="kartu-badge">Regulasi</span>
        </span>
        <span class="kartu-body">
          <span class="kartu-title" id="service-title-6">DOKUMEN & REGULASI</span>
          <span class="kartu-desc">Unduh formulir pendaftaran nikah, PMA, Perdirjen, dan berkas regulasi resmi.</span>
        </span>
        <span class="kartu-footer">
          <span>Buka Layanan</span>
          <svg class="arrow-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </span>
      </button>
    </section>
  </main>

  <!-- Bottom Sheet Modal -->
  <dialog class="bottom-sheet" id="bottomSheet" aria-labelledby="sheet-title">
    <div class="sheet-header">
      <h3 id="sheet-title">Judul Menu</h3>
      <button type="button" id="closeSheet" aria-label="Tutup menu layanan" autofocus>✕</button>
    </div>
    <div class="sheet-content" id="sheet-content">
      <p>Memuat daftar pilihan...</p>
    </div>
  </dialog>

  <?php include __DIR__ . '/include/footer.php'; ?>
  <script src="overlay.js"></script>
</body>
</html>
