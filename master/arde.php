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

  <section class="arde">
    <div class="ardox">
      <?php
      $id = $_GET['id'] ?? null;
      $filePath = "../assets/artikel/artikel{$id}.html";

      if ($id && file_exists($filePath)) {
        include($filePath);
      } else {
        echo "<h2>Artikel Tidak Ditemukan</h2>";
        echo "<p>Maaf, artikel yang Anda cari tidak tersedia.</p>";
      }
      ?>
    </div>

    <a href="artikel.php" class="back-button">Kembali ke Daftar Artikel</a>
  </section>

  <?php include '../include/footer.php'; ?>
</body>
</html>
