<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jadwal Sholat</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="../include/style/header.css">
  <link rel="stylesheet" href="style/jadwalsholat.css">
  <link rel="stylesheet" href="../include/style/footer.css">
</head>
<body>
  <?php include '../include/header.php'; ?>
   <div class="jadwal-container">
    <h2>Jadwal Sholat Wilayah Kalisat - Oktober 2025</h2>

    <div class="table-wrapper">
      <table class="jadwal-table">
        <thead>
          <tr>
            <th>Tanggal</th>
            <th>Hari</th>
            <th>Shubuh</th>
            <th>Syuruq</th>
            <th>Dhuha</th>
            <th>Zhuhur</th>
            <th>'Ashr</th>
            <th>Maghrib</th>
            <th>Isya'</th>
          </tr>
        </thead>
        <tbody>
        <?php
          $file = '../assets/jadwalSholatOktober.txt';
          if (file_exists($file)) {
            $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            $startData = false;

            foreach ($lines as $line) {
              if (str_starts_with(trim($line), 'Tanggal')) {
                $startData = true;
                continue;
              }

              if (str_starts_with(trim($line), 'Waktu') || str_starts_with(trim($line), 'Jam Kiblat') || str_starts_with(trim($line), 'Disiapkan')) {
                break;
              }

              if ($startData) {
                $cols = preg_split('/\s+/', trim($line));
                if (count($cols) >= 9) {
                  echo "<tr>";
                  for ($i = 0; $i < 9; $i++) {
                    echo "<td>" . htmlspecialchars($cols[$i]) . "</td>";
                  }
                  echo "</tr>";
                }
              }
            }
          } else {
            echo "<tr><td colspan='9'>File jadwal tidak ditemukan.</td></tr>";
          }
        ?>
        </tbody>
      </table>
    </div>
    <a href="../index.php" class="back-button">Kembali ke Beranda</a>
  </div>

  <?php include '../include/footer.php'; ?>
</body>
</html>
