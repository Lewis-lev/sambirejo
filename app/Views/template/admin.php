<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#174f3b">
    <meta name="description" content="Panel pengelola Desa Wisata Sambirejo.">
    <title><?= esc($judul) ?> · Admin Sambirejo</title>
    <link rel="icon" href="<?= base_url('img/sambirejo.webp') ?>">
    <link rel="stylesheet" href="<?= base_url('css/site.css') ?>">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?= base_url('css/admin.css') ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js" defer></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" defer></script>
    <script src="<?= base_url('js/data-tables.js') ?>" defer></script>
    <script src="<?= base_url('js/admin.js') ?>" defer></script>
</head>
<body class="admin-page">
    <a class="skip-link" href="#admin-content">Langsung ke konten admin</a>
    <header class="admin-header">
        <div class="admin-topline">
            <a class="admin-brand" href="<?= base_url('admin') ?>">
                <span class="admin-brand-mark" aria-hidden="true">S</span>
                <span><strong>Sambirejo</strong><small>Panel pengelola</small></span>
            </a>
            <div class="admin-account">
                <span class="admin-avatar" aria-hidden="true"><?= esc(strtoupper(substr(session()->get('username') ?? 'A', 0, 1))) ?></span>
                <span class="admin-account-name"><?= esc(session()->get('username') ?? 'Admin') ?></span>
                <a class="admin-logout" href="<?= base_url('logout') ?>"><span aria-hidden="true">↗</span> Keluar</a>
            </div>
        </div>
        <nav class="admin-nav" aria-label="Navigasi admin">
            <div class="admin-nav-inner">
                <a href="<?= base_url('admin') ?>" <?= service('uri')->getSegment(1) === 'admin' ? 'aria-current="page"' : '' ?>><span aria-hidden="true">▦</span> Semua pesanan</a>
                <a href="<?= base_url('status') ?>" <?= service('uri')->getSegment(1) === 'status' ? 'aria-current="page"' : '' ?>><span aria-hidden="true">✓</span> Sudah membayar</a>
                <a href="<?= base_url('status1') ?>" <?= service('uri')->getSegment(1) === 'status1' ? 'aria-current="page"' : '' ?>><span aria-hidden="true">◷</span> Belum membayar</a>
                <a href="<?= base_url('kunjungan') ?>" <?= service('uri')->getSegment(1) === 'kunjungan' ? 'aria-current="page"' : '' ?>><span aria-hidden="true">⌖</span> Sudah berkunjung</a>
                <a href="<?= base_url('kunjungan1') ?>" <?= service('uri')->getSegment(1) === 'kunjungan1' ? 'aria-current="page"' : '' ?>><span aria-hidden="true">⌁</span> Belum berkunjung</a>
            </div>
        </nav>
    </header>

    <main class="admin-main" id="admin-content">
        <?= view($page_konten, $add_data); ?>
    </main>
    <footer class="admin-footer">
        <span>© <?= date('Y') ?> Desa Wisata Sambirejo</span>
        <a href="<?= base_url('/') ?>">Kunjungi situs utama ↗</a>
    </footer>
</body>
</html>
