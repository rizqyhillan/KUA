const bottomSheet = document.getElementById('bottomSheet');
const closeSheet = document.getElementById('closeSheet');
const sheetTitle = document.getElementById('sheet-title');
const sheetContent = document.getElementById('sheet-content');

const searchInput = document.getElementById('searchInput');
const searchResults = document.getElementById('searchResults');
let activeCard = null;

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
  "FIQIH PERNIKAHAN": [
    { text: "Chat Petugas KUA", url: "master/konsultasi.php" }
  ],
  "BERITA & ARTIKEL": [
    { text: "Lihat Artikel Terkini", url: "master/artikel.php" }
  ],
  "GALERI & DOKUMENTASI": [
    { text: "Galeri Kegiatan", url: "master/galeri.php" }
  ],
  "DOKUMEN & REGULASI": [
    { text: "Form Pendaftaran Nikah", url: "https://drive.google.com/drive/folders/13C4oKZhis6kZVnqEJBTeY5KYxCCa_cVL?usp=drive_link" },
    { text: "UUD, PMA, PERDIRJEN", url: "https://drive.google.com/drive/folders/1d9YHPkMU05PJVq5vVobHoZ3mzlLFvIwQ?usp=drive_link" }
  ]
};

// Meratakan daftar link untuk fitur pencarian
const allServices = [];
Object.keys(linkMap).forEach(category => {
  linkMap[category].forEach(item => {
    allServices.push({
      category: category,
      text: item.text,
      url: item.url
    });
  });
});

// Event Klik Kartu
document.querySelectorAll('.kartu').forEach(card => {
  card.addEventListener('click', () => {
    const title = card.dataset.category;
    sheetTitle.textContent = title;

    const items = linkMap[title] || [];

    let html = '';
    if (items.length > 0) {
      html = '<ul class="sheet-menu">';
      items.forEach(item => {
        html += `
          <li>
            <a href="${item.url}" target="${item.url.startsWith('http') ? '_blank' : '_self'}"${item.url.startsWith('http') ? ' rel="noopener noreferrer"' : ''}>
              <span class="link-text">
                <i class="icon-link"></i> ${item.text}
              </span>
              <span>&rarr;</span>
            </a>
          </li>`;
      });
      html += '</ul>';
    } else {
      html = '<p style="color: #64748b; font-size: 14px;">Tidak ada menu untuk kategori ini.</p>';
    }

    sheetContent.innerHTML = html;
    searchResults.classList.remove('active');
    activeCard = card;
    card.setAttribute('aria-expanded', 'true');
    document.body.classList.add('sheet-open');
    bottomSheet.showModal();
  });
});

const closeBottomSheet = () => {
  bottomSheet.close();
};

closeSheet.addEventListener('click', closeBottomSheet);
bottomSheet.addEventListener('keydown', (event) => {
  if (event.key !== 'Tab') return;
  const controls = bottomSheet.querySelectorAll('button, a[href]');
  const first = controls[0];
  const last = controls[controls.length - 1];
  if (event.shiftKey && document.activeElement === first) {
    event.preventDefault();
    last.focus();
  } else if (!event.shiftKey && document.activeElement === last) {
    event.preventDefault();
    first.focus();
  }
});

bottomSheet.addEventListener('close', () => {
  document.body.classList.remove('sheet-open');
  if (activeCard) {
    activeCard.setAttribute('aria-expanded', 'false');
    activeCard.focus({ preventScroll: true });
    activeCard = null;
  }
});

// A backdrop click targets the dialog but falls outside its visible rectangle.
bottomSheet.addEventListener('click', (event) => {
  if (event.target !== bottomSheet) return;
  const rect = bottomSheet.getBoundingClientRect();
  if (event.clientX < rect.left || event.clientX > rect.right ||
      event.clientY < rect.top || event.clientY > rect.bottom) {
    closeBottomSheet();
  }
});

// Fitur Live Search
searchInput.addEventListener('input', () => {
  const query = searchInput.value.toLowerCase().trim();
  if (!query) {
    searchResults.classList.remove('active');
    searchResults.innerHTML = '';
    return;
  }

  const filtered = allServices.filter(service => 
    service.text.toLowerCase().includes(query) || 
    service.category.toLowerCase().includes(query)
  );

  if (filtered.length > 0) {
    let html = '';
    filtered.forEach(item => {
      html += `
        <li>
          <a href="${item.url}" target="${item.url.startsWith('http') ? '_blank' : '_self'}"${item.url.startsWith('http') ? ' rel="noopener noreferrer"' : ''}>
            <span class="res-title">${item.text}</span>
            <span class="res-cat">${item.category}</span>
          </a>
        </li>`;
    });
    searchResults.innerHTML = html;
    searchResults.classList.add('active');
  } else {
    searchResults.innerHTML = `
      <li style="padding: 12px 18px; font-size: 13px; color: #64748b;">
        Layanan tidak ditemukan...
      </li>`;
    searchResults.classList.add('active');
  }
});

searchInput.addEventListener('keydown', (event) => {
  if (event.key === 'ArrowDown' && searchResults.classList.contains('active')) {
    const firstResult = searchResults.querySelector('a');
    if (firstResult) {
      event.preventDefault();
      firstResult.focus();
    }
  }
  if (event.key === 'Escape') searchResults.classList.remove('active');
});

searchResults.addEventListener('keydown', (event) => {
  if (event.key === 'Escape') {
    searchResults.classList.remove('active');
    searchInput.focus();
  }
});

document.addEventListener('focusin', (event) => {
  if (!event.target.closest('.search-wrapper')) {
    searchResults.classList.remove('active');
  }
});

// Sembunyikan pencarian ketika klik di luar box
document.addEventListener('click', (e) => {
  if (!e.target.closest('.search-wrapper')) {
    searchResults.classList.remove('active');
  }
});
