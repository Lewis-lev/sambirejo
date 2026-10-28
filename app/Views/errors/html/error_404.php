<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#174f3b">
    <title>Halaman tidak ditemukan · Sambirejo</title>
    <link rel="icon" href="<?= base_url('img/sambirejo.webp') ?>">
    <link rel="stylesheet" href="<?= base_url('css/site.css?v=3') ?>">
</head>
<body class="error-page">
    <header class="site-header">
        <div class="site-container nav-wrap">
            <a class="brand" href="<?= base_url('/') ?>" aria-label="Sambirejo, beranda">
                <span class="brand-mark" aria-hidden="true">S</span>
                <span class="brand-copy"><strong>Sambirejo</strong><small>Desa Wisata · Yogyakarta</small></span>
            </a>
            <a class="text-link" href="<?= base_url('/') ?>">Kembali ke beranda <span aria-hidden="true">↗</span></a>
        </div>
    </header>
    <main class="error-content">
        <div class="error-landscape" aria-hidden="true">
            <span class="error-sun"></span>
            <span class="error-hill error-hill-back"></span>
            <span class="error-hill error-hill-front"></span>
            <span class="error-path"></span>
        </div>
        <div class="error-copy">
            <span class="eyebrow">Sepertinya tersesat di perbukitan</span>
            <p class="error-code">404</p>
            <h1>Halaman ini tidak ditemukan.</h1>
            <p>Jalurnya mungkin sudah berubah atau alamat yang kamu buka tidak tepat. Ayo kembali dan jelajahi Sambirejo.</p>
            <?php if (ENVIRONMENT !== 'production') : ?>
                <p class="error-detail"><?= nl2br(esc($message)) ?></p>
            <?php endif ?>
            <div class="error-actions">
                <a class="button" href="<?= base_url('/') ?>">Kembali ke beranda <span aria-hidden="true">↗</span></a>
                <a class="button button-outline" href="<?= base_url('lokasi') ?>">Jelajahi destinasi</a>
            </div>
        </div>
    </main>
    <footer class="error-footer">© <?= date('Y') ?> Desa Wisata Sambirejo · Yogyakarta</footer>
</body>
</html>
