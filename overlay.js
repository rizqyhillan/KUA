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