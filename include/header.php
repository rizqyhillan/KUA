<?php require_once __DIR__ . '/paths.php'; ?>
<header>
  <div class="navbar">
    <a class="lorea" href="<?= kua_url('index.php') ?>" aria-label="KUA Kalisat Jember — Beranda">
      <span class="brand-logos" aria-hidden="true">
        <img src="<?= kua_url('assets/logo-kemenag.svg') ?>" alt="" class="logo" />
        <img src="<?= kua_url('assets/logo-bimas.svg') ?>" alt="" class="logo" />
        <img src="<?= kua_url('assets/logo2.svg') ?>" alt="" class="logo" />
      </span>
      <span class="site-name">KUA Kalisat Jember</span>
    </a>

    <nav class="menu" aria-label="Navigasi utama">
      <ul>
        <li><a href="https://www.jadwalsholat.org/adzan/monthly.php">Jadwal Sholat</a></li>
        <li><a href="<?= kua_url('master/survei.php') ?>">Survei</a></li>
        <li><a href="<?= kua_url('master/profil.php') ?>">Profil</a></li>
      </ul>
    </nav>
  </div>

</header>
