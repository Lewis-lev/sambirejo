<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#174f3b">
    <title>Admin masuk · Sambirejo</title>
    <link rel="icon" href="<?= base_url('img/sambirejo.webp') ?>">
    <link rel="stylesheet" href="<?= base_url('css/site.css') ?>">
    <link rel="stylesheet" href="<?= base_url('css/admin-login.css') ?>">
    <script src="<?= base_url('js/admin-login.js') ?>" defer></script>
</head>
<body class="login-page">
    <a class="skip-link" href="#login-form">Langsung ke formulir masuk</a>
    <main class="login-shell">
        <section class="login-story" aria-label="Desa Wisata Sambirejo">
            <img class="login-landscape" src="<?= base_url('img/wisata/bukit_paralayang.webp') ?>" alt="">
            <div class="login-story-overlay"></div>
            <a class="login-brand brand brand-light" href="<?= base_url('/') ?>">
                <span class="brand-mark" aria-hidden="true">S</span>
                <span class="brand-copy"><strong>Sambirejo</strong><small>Desa Wisata · Yogyakarta</small></span>
            </a>
            <div class="login-story-copy">
                <span class="eyebrow">Ruang pengelola</span>
                <h1>Merawat cerita, menyambut perjalanan.</h1>
                <p>Kelola informasi kunjungan dan bantu setiap tamu menemukan keindahan Sambirejo.</p>
            </div>
            <span class="login-caption">Sambirejo · Sleman · Daerah Istimewa Yogyakarta</span>
        </section>

        <section class="login-panel">
            <div class="login-card">
                <a class="login-mobile-brand brand" href="<?= base_url('/') ?>">
                    <span class="brand-mark" aria-hidden="true">S</span>
                    <span class="brand-copy"><strong>Sambirejo</strong><small>Desa Wisata · Yogyakarta</small></span>
                </a>
                <div class="login-heading">
                    <span class="eyebrow">Portal admin</span>
                    <h2>Selamat datang kembali.</h2>
                    <p>Masuk dengan akun pengelola untuk melanjutkan.</p>
                </div>

                <?php if (session()->getFlashdata('error')): ?>
                    <div class="login-alert" role="alert"><?= esc(session()->getFlashdata('error')) ?></div>
                <?php endif; ?>

                <form id="login-form" class="login-form" action="<?= base_url('login/valid_login') ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="login-field">
                        <label for="username">Username</label>
                        <input id="username" name="username" type="text" autocomplete="username" placeholder="Masukkan username" maxlength="100" required autofocus value="<?= esc(old('username') ?? '') ?>">
                    </div>
                    <div class="login-field">
                        <label for="password">Password</label>
                        <div class="password-control">
                            <input id="password" name="password" type="password" autocomplete="current-password" placeholder="Masukkan password" maxlength="255" required>
                            <button class="password-toggle" type="button" aria-label="Tampilkan password" aria-pressed="false" data-password-toggle>Tampilkan</button>
                        </div>
                    </div>
                    <button class="button login-submit" type="submit">Masuk ke dashboard <span aria-hidden="true">↗</span></button>
                </form>

                <a class="login-back" href="<?= base_url('/') ?>"><span aria-hidden="true">←</span> Kembali ke situs</a>
            </div>
            <footer class="login-footer">© <?= date('Y') ?> Desa Wisata Sambirejo</footer>
        </section>
    </main>
</body>
</html>
