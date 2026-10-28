<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#174f3b">
    <meta name="description" content="Jelajahi desa wisata Sambirejo, dari tebing batu dan candi di perbukitan hingga senja dan panorama Yogyakarta.">
    <title><?= esc($judul) ?> · Sambirejo</title>
    <link rel="icon" href="<?= base_url('img/sambirejo.webp') ?>">
    <link rel="stylesheet" href="<?= base_url('css/site.css?v=3') ?>">
    <script src="<?= base_url('js/site.js?v=2') ?>" defer></script>
</head>
<body>
    <a class="skip-link" href="#main-content">Langsung ke konten</a>
    <div class="topbar">
        <div class="site-container topbar-inner">
            <span>Desa wisata di dataran tinggi Yogyakarta</span>
            <a href="<?= base_url('lokasi') ?>">Rencanakan kunjungan <span aria-hidden="true">↗</span></a>
        </div>
    </div>
    <header class="site-header">
        <div class="site-container nav-wrap">
            <a class="brand" href="<?= base_url('/') ?>" aria-label="Sambirejo, beranda">
                <span class="brand-mark" aria-hidden="true">S</span>
                <span class="brand-copy"><strong>Sambirejo</strong><small>Desa Wisata · Yogyakarta</small></span>
            </a>
            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation">
                <span class="sr-only">Buka navigasi</span><span></span><span></span>
            </button>
            <nav class="site-nav" id="primary-navigation" aria-label="Navigasi utama">
                <a href="<?= base_url('/') ?>" <?= $judul === 'Sambirejo' ? 'aria-current="page"' : '' ?>>Beranda</a>
                <a href="<?= base_url('profile') ?>" <?= $judul === 'Cerita Sambirejo' ? 'aria-current="page"' : '' ?>>Cerita</a>
                <a href="<?= base_url('lokasi') ?>" <?= $judul === 'Jelajahi' ? 'aria-current="page"' : '' ?>>Jelajahi</a>
                <a href="<?= base_url('paket') ?>" <?= $judul === 'Paket wisata' ? 'aria-current="page"' : '' ?>>Paket wisata</a>
                <a href="<?= base_url('simulasi') ?>" <?= $judul === 'Rencana perjalanan' ? 'aria-current="page"' : '' ?>>Rencana perjalanan</a>
                <a class="nav-contact" href="<?= base_url('contact') ?>" <?= $judul === 'Kontak' ? 'aria-current="page"' : '' ?>>Hubungi kami <span aria-hidden="true">↗</span></a>
            </nav>
        </div>
    </header>

    <main id="main-content">
        <?= view($page_konten, $add_data); ?>
    </main>

    <footer class="site-footer">
        <div class="site-container footer-main">
            <div class="footer-brand">
                <a class="brand brand-light" href="<?= base_url('/') ?>">
                    <span class="brand-mark" aria-hidden="true">S</span>
                    <span class="brand-copy"><strong>Sambirejo</strong><small>Desa Wisata · Yogyakarta</small></span>
                </a>
                <p>Temukan cerita, alam, dan keramahan di perbukitan Sambirejo.</p>
            </div>
            <div class="footer-links">
                <strong>Jelajahi</strong>
                <a href="<?= base_url('lokasi') ?>">Destinasi</a>
                <a href="<?= base_url('paket') ?>">Paket wisata</a>
                <a href="<?= base_url('simulasi') ?>">Rencana perjalanan</a>
            </div>
            <div class="footer-links">
                <strong>Terhubung</strong>
                <a href="<?= base_url('contact') ?>">Kontak</a>
                <a href="https://www.instagram.com/kalurahansambirejo/" target="_blank" rel="noopener noreferrer">Instagram ↗</a>
                <a href="https://wa.me/6282226110203" target="_blank" rel="noopener noreferrer">WhatsApp ↗</a>
            </div>
        </div>
        <div class="site-container footer-bottom">
            <span>© <?= date('Y') ?> Desa Wisata Sambirejo</span>
            <span>Dibuat dengan bangga di Yogyakarta</span>
        </div>
    </footer>
</body>
</html>
