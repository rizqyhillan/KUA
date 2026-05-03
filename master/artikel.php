<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artikel - KUA Kalisat Jember</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../include/style/header.css">
  <link rel="stylesheet" href="style/artikel.css">
  <link rel="stylesheet" href="../include/style/footer.css">
</head>

<body>
  <?php include '../include/header.php'; ?>

  <section class="artkon">
    <h2>Artikel & Berita KUA Kalisat</h2>

    <div class="search-box">
      <input type="text" id="searchInput" placeholder="Cari artikel..." onkeyup="searchArtikel()">
    </div>

    <div class="artgrit">
      <a href="arde.php?id=1" class="arca">
        <img src="../assets/artikel/img/art1.jpg" alt="Artikel 1">
        <div class="arin">
          <h3>Syarat Dan Ketentuan Jatuhnya Talak Atau Cerai Suami-Istri</h3>
          <p>Talak atau perceraian adalah terlepasnya ikatan pernikahan antara suami dan istri, yang dapat terjadi karena berbagai alasan...</p>
        </div>
      </a>

      <a href="arde.php?id=2" class="arca">
        <img src="../assets/artikel/img/art2.png" alt="Artikel 2">
        <div class="arin">
          <h3>Istri Tolak Poligami, Apakah Berdosa?</h3>
          <p>Poligami adalah sistem perkawinan yang membolehkan suami beristri lebih dari satu...</p>
        </div>
      </a>

      <a href="arde.php?id=3" class="arca">
        <img src="../assets/artikel/img/art3.jpg" alt="Artikel 3">
        <div class="arin">
          <h3>Kapan Wali Nikah Pengantin Beralih Kepada Wali Hakim?</h3>
          <p>Salah satu rukun nikah adalah wali. Pernikahan tidak sah tanpa adanya wali atau tanpa izin dari pihak yang berhak...</p>
        </div>
      </a>

      <a href="arde.php?id=4" class="arca">
        <img src="../assets/artikel/img/art4.png" alt="Artikel 4">
        <div class="arin">
          <h3>Wujudkan Layanan Nikah Tanpa Pungli, Kemenag Jember Mantapkan Inovasi S’GRA NIKAH Melalui Monev Triwulan I Tahun 2025</h3>
          <p>Jember (Humas) --- Kantor Kementerian Agama Kabupaten Jember secara resmi merilis Laporan Monitoring dan Evaluasi (Monev) Triwulan I Tahun 2025 terkait program inovasi...</p>
        </div>
      </a>

      <a href="arde.php?id=5" class="arca">
        <img src="../assets/artikel/img/art5.svg" alt="Artikel 5">
        <div class="arin">
          <h3>Akselerasi Layanan Prima: Kemenag Jember Perkuat Inovasi S'GRA NIKAH dan Layanan Inklusif di Triwulan II</h3>
          <p>Jember (Humas) --- Kantor Kementerian Agama Kabupaten Jember resmi merilis Laporan Monitoring dan Evaluasi (Monev) Triwulan II Tahun 2025...</p>
        </div>
      </a>

      <a href="arde.php?id=6" class="arca">
        <img src="../assets/artikel/img/art6i.jpg" alt="Artikel 6">
        <div class="arin">
          <h3>Audit Maraton 31 KUA: Kemenag Jember Pastikan Layanan S’GRA NIKAH Steril dari Pungli pada Triwulan III</h3>
          <p>Jember (6 Oktober 2025) --- Kantor Kementerian Agama Kabupaten Jember melalui tim Agen Perubahan kembali mempertegas komitmennya dalam pemberantasan gratifikasi. Memasuki Triwulan III...</p>
        </div>
      </a>

      <a href="arde.php?id=7" class="arca">
        <img src="../assets/artikel/img/art7.png" alt="Artikel 7">
        <div class="arin">
          <h3>S’GRA NIKAH Kemenag Jember Sukses Besar: IKM Tembus 96,7%, 13 KUA Raih Predikat Zona Integritas Terbaik</h3>
          <p>Jember (5 Januari 2026) – Menutup tahun 2025, Kantor Kementerian Agama Kabupaten Jember merilis hasil Laporan Monitoring dan Evaluasi...</p>
        </div>
      </a>
    </div>
  </section>

  <a href="../index.php" class="back-button">Kembali ke Beranda</a>

  <?php include '../include/footer.php'; ?>
  <script>
    function searchArtikel() {
      let input = document.getElementById("searchInput");
      let filter = input.value.toLowerCase();
      let cards = document.querySelectorAll(".arca");

    cards.forEach(card => {
      let title = card.querySelector("h3").innerText.toLowerCase();
      let desc = card.querySelector("p").innerText.toLowerCase();

        if (title.includes(filter) || desc.includes(filter)) {
          card.style.display = "flex";
        } else {
          card.style.display = "none";
        }
      });
    }
  </script>
</body>
</html>
