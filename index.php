<!DOCTYPE html>
<html lang="id">
<head>  
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KUA Kalisat Jember</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="include/style/header.css" />
  <link rel="stylesheet" href="include/style/footer.css" />
</head>
<body>
    <?php include 'include/header1.php'; ?>

  <div class="text-jalan">
    <div class=" jalanan">
      - Selamat Datang di Website Resmi KUA Kecamatan Kalisat Kabupaten Jember - 
  </div>
  <section class="info">
  <a class="kartu">
    <img src="assets/info.svg" class="ikonkartu" />
    <p>INFO NIKAH</p>
  </a>

  <a class="kartu">
    <img src="assets/prosedur.svg" class="ikonkartu" />
    <p>PROSEDUR LAYANAN KUA</p>
  </a>

  <a class="kartu">
    <img src="assets/konsultasi.svg" class="ikonkartu" />
    <p>KONSULTASI PERNIKAHAN DAN HUKUM ISLAM</p>
  </a>

  <a class="kartu">
    <img src="assets/artikel.svg" class="ikonkartu" />
    <p>BERITA & ARTIKEL</p>
  </a>

  <a class="kartu">
    <img src="assets/galeri.svg" class="ikonkartu" />
    <p>GALERI & DOKUMENTASI</p>
  </a>

  <a class="kartu">
    <img src="assets/dokumen.svg" class="ikonkartu" />
    <p>DOKUMEN & REGULASI</p>
  </a>
</section>
<div class="overlay" id="overlay"></div>
<div class="bottom-sheet" id="bottomSheet">
  <div class="sheet-header">
    <h3 id="sheet-title">Judul Menu</h3>
    <button id="closeSheet">✕</button>
  </div>
  <div class="sheet-content" id="sheet-content">
    <p>Isi menu akan muncul di sini...</p>
  </div>
</div>

  <?php include 'include/footer1.php'; ?>
  <script src="overlay.js"></script>
</body>
</html>