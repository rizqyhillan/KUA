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
  <script>
  const overlay = document.getElementById('overlay');
  const bottomSheet = document.getElementById('bottomSheet');
  const closeSheet = document.getElementById('closeSheet');
  const sheetTitle = document.getElementById('sheet-title');
  const sheetContent = document.getElementById('sheet-content');

  const linkMap = {
    "INFO NIKAH": [
      { text: "Daftar Nikah Online", url: "https://simkah4.kemenag.go.id/" },
      { text: "Dokumen Persyaratan Nikah", url: "master/dokumenpersyaratan.php" },
      { text: "Rekomendasi Nikah", url: "master/rekomendasi.php" },
      { text: "Legalisir dan Duplikat Buku Nikah", url: "master/legdup.php" },
      { text: "Isbat Nikah", url: "master/isbat.php" }
    ],

    "PROSEDUR LAYANAN KUA": [
      { text: "Alur Pendaftaran Nikah", url: "master/alur.php" },
      { text: "Cara Daftar Nikah Di SIMKAH", url: "master/tutorsimkah.php" },
      { text: "Pencatatan Rujuk", url: "master/rujuk.php" },
      { text: "Pelayanan Wakaf", url: "master/wakaf.php" }
    ],

    "KONSULTASI PERNIKAHAN DAN HUKUM ISLAM": [
      { text: "Chat Petugas KUA", url: "master/konsultasi.php" },
    ],

    "BERITA & ARTIKEL": [
      { text: "Lihat Artikel Terkini", url: "master/artikel.php" },
    ],

    "GALERI & DOKUMENTASI": [
      { text: "Galeri Kegiatan", url: "master/galeri.php" },
    ],

    "DOKUMEN & REGULASI": [
      { text: "Form Pendaftaran Nikah", url: "https://drive.google.com/drive/folders/13C4oKZhis6kZVnqEJBTeY5KYxCCa_cVL?usp=drive_link" },
      { text: "UUD, PMA, PERDIRJEN", url: "https://drive.google.com/drive/folders/1d9YHPkMU05PJVq5vVobHoZ3mzlLFvIwQ?usp=drive_link" }
    ]
  };

  document.querySelectorAll('.kartu').forEach(card => {
    card.addEventListener('click', () => {
      const title = card.innerText.trim();
      sheetTitle.textContent = title;

      const items = linkMap[title] || [];

      let html = '';
      if (items.length > 0) {
        html = '<ul class="sheet-menu">';
        items.forEach(item => {
          html += `
            <li><a href="${item.url}">
              <i class="icon-link"></i> ${item.text}
            </a></li>`;
        });
        html += '</ul>';
      } else {
        html = '<p>Tidak ada menu untuk kategori ini.</p>';
      }

      sheetContent.innerHTML = html;

      overlay.classList.add('active');
      bottomSheet.classList.add('active');
    });
  });

  const closeBottomSheet = () => {
    overlay.classList.remove('active');
    bottomSheet.classList.remove('active');
  };

  closeSheet.addEventListener('click', closeBottomSheet);
  overlay.addEventListener('click', closeBottomSheet);
</script>
</body>
</html>