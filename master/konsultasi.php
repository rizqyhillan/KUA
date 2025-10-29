<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Konsultasi</title>
  <link rel="stylesheet" href="../style.css">
  <link rel="stylesheet" href="../include/style/header.css">
  <link rel="stylesheet" href="style/konsultasi.css">
  <link rel="stylesheet" href="../include/style/footer.css">
</head>
<body>
  <?php include '../include/header.php'; ?>
  <main class="konsultasi-container">
    <h2>Hubungi Petugas Konsultasi</h2>
    <p class="sub-text">Klik salah satu kontak di bawah untuk memulai percakapan via WhatsApp</p>

    <div class="contact-grid">
      <a href="https://wa.me/6281331272658" target="_blank" class="contact-card">
        <img src="../assets/MuhammadAlfiHusnan.JPG" alt="Petugas 1" class="contact-img">
        <div class="contact-info">
          <h3>Muhammad Alfi Husnan, S.Ag</h3>
          <p>Penghulu</p>
          <span class="wa-button">Chat via WhatsApp</span>
        </div>
      </a>

      <a href="https://wa.me/6281331924453" target="_blank" class="contact-card">
        <img src="../assets/Fawaid.JPG" alt="Petugas 2" class="contact-img">
        <div class="contact-info">
          <h3>Fawaid, S.Ag</h3>
          <p>Penghulu</p>
          <span class="wa-button">Chat via WhatsApp</span>
        </div>
      </a>

      <a href="https://wa.me/6282331512454" target="_blank" class="contact-card">
        <img src="../assets/AbdulGafururRohim.JPG" alt="Petugas 3" class="contact-img">
        <div class="contact-info">
          <h3>Abdul Gafurur Rohim, S.Sos</h3>
          <p>Kepala KUA Kalisat</p>
          <span class="wa-button">Chat via WhatsApp</span>
        </div>
      </a>
    </div>
  </main>

  <a href="../index.php" class="back-button">Kembali ke Beranda</a>

  <?php include '../include/footer.php'; ?>
</body>
</html>
