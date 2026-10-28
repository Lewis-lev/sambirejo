<section class="page-hero">
    <div class="site-container page-intro">
        <span class="eyebrow">Perjalanan sesuai caramu</span>
        <h1>Pilih pengalaman, biar bukit yang melengkapi.</h1>
        <p>Bandingkan pilihan paket dan hubungi pengelola untuk memastikan jadwal, ketersediaan, dan harga terbaru.</p>
    </div>
</section>
<section class="site-container page-content">
    <div class="package-grid">
        <article class="package-card">
            <img src="<?= base_url('img/paket/balkondes/balkondes1.webp') ?>" alt="Penginapan Balkondes Sambirejo" loading="lazy">
            <div class="package-copy"><span class="eyebrow">Menginap</span><h2>Balkondes Sambirejo</h2><p>Pilihan kamar dan fasilitas untuk singgah lebih lama.</p>
                <ul class="package-options"><li><span>Family Room</span><strong>Rp2.200.000</strong></li><li><span>Couple Room</span><strong>Rp600.000</strong></li><li><span>Extra Bed</span><strong>Rp110.000</strong></li></ul>
                <a class="text-link" href="https://wa.me/6282133578825" target="_blank" rel="noopener noreferrer">Tanya pengelola ↗</a>
            </div>
        </article>
        <article class="package-card">
            <img src="<?= base_url('img/paket/rmahika_kb/rmahika_kb1.webp') ?>" alt="Penginapan Mahika Ayu" loading="lazy">
            <div class="package-copy"><span class="eyebrow">Menginap</span><h2>Mahika Ayu &amp; Kopi Breksi</h2><p>Pilihan kamar untuk menikmati suasana perbukitan.</p>
                <ul class="package-options"><li><span>Couple Room Mahika</span><strong>Rp500.000</strong></li></ul>
                <a class="text-link" href="https://wa.me/6281328512722" target="_blank" rel="noopener noreferrer">Tanya pengelola ↗</a>
            </div>
        </article>
        <article class="package-card">
            <img src="<?= base_url('img/paket/paket_std/paket_std1.webp') ?>" alt="Kegiatan paket edukasi Sambirejo" loading="lazy">
            <div class="package-copy"><span class="eyebrow">Belajar bersama</span><h2>Paket Study</h2><p>Pengalaman edukasi untuk mengenal potensi desa.</p>
                <ul class="package-options"><li><span>Paket Sambi 1–3</span><strong>Rp95.000–145.000</strong></li><li><span>Paket Sambi A–C</span><strong>Rp150.000–220.000</strong></li></ul>
                <a class="text-link" href="https://wa.me/6282133309120" target="_blank" rel="noopener noreferrer">Tanya pengelola ↗</a>
            </div>
        </article>
        <article class="package-card">
            <img src="<?= base_url('img/paket/jbreksi/jbreksi.webp') ?>" alt="Wisata jeep di kawasan Tebing Breksi" loading="lazy">
            <div class="package-copy"><span class="eyebrow">Petualangan</span><h2>Jeep Breksi</h2><p>Pilih durasi perjalanan jeep dan tanyakan rute yang tersedia.</p>
                <ul class="package-options"><li><span>Short Trip</span><strong>Rp360.000</strong></li><li><span>Medium Trip</span><strong>Rp450.000</strong></li><li><span>Long Trip</span><strong>Rp600.000</strong></li></ul>
                <a class="text-link" href="https://wa.me/6281328306603" target="_blank" rel="noopener noreferrer">Tanya pengelola ↗</a>
            </div>
        </article>
        <article class="package-card">
            <img src="<?= base_url('img/paket/cmahika/cmahika1.webp') ?>" alt="Area camping Mahika Ayu" loading="lazy">
            <div class="package-copy"><span class="eyebrow">Bermalam di alam</span><h2>Camping Mahika Ayu</h2><p>Beragam paket berkemah untuk pengalaman luar ruang.</p>
                <ul class="package-options"><li><span>Mandiri</span><strong>Rp50.000</strong></li><li><span>Relax – Premium</span><strong>Rp350.000–695.000</strong></li><li><span>Campervan</span><strong>Rp1.500.000</strong></li></ul>
                <a class="text-link" href="https://wa.me/6281393783502" target="_blank" rel="noopener noreferrer">Tanya pengelola ↗</a>
            </div>
        </article>
    </div>

    <?php $requestTicket = session()->getFlashdata('request_ticket'); ?>
    <section class="booking-panel" id="pesan">
        <span class="eyebrow">Permintaan informasi</span>
        <h2>Pesan sekarang juga</h2>
        <p>Kirim permintaanmu kepada pengelola. Mereka akan menghubungimu untuk memastikan detail dan ketersediaan.</p>
        <?php if ($requestTicket): ?>
            <section class="digital-ticket" id="request-ticket" aria-labelledby="ticket-heading">
                <div class="ticket-topline">
                    <span class="ticket-brand"><span class="ticket-brand-mark" aria-hidden="true">S</span> Sambirejo</span>
                    <span class="ticket-type">Konfirmasi permintaan</span>
                </div>
                <div class="ticket-content">
                    <div class="ticket-copy">
                        <span class="ticket-status"><span aria-hidden="true">◷</span> Menunggu konfirmasi pengelola</span>
                        <h3 id="ticket-heading">Permintaanmu sudah terkirim.</h3>
                        <p>Simpan tiket ini dan gunakan kode referensi jika menghubungi pengelola.</p>
                    </div>
                    <div class="ticket-code-block">
                        <span>KODE REFERENSI</span>
                        <strong><?= esc($requestTicket['kode']) ?></strong>
                    </div>
                </div>
                <dl class="ticket-details">
                    <div><dt>Nama</dt><dd><?= esc($requestTicket['nama']) ?></dd></div>
                    <div><dt>Paket wisata</dt><dd><?= esc($requestTicket['tiket']) ?></dd></div>
                    <div><dt>Pilihan</dt><dd><?= esc($requestTicket['paket']) ?></dd></div>
                    <div><dt>Tanggal permintaan</dt><dd><?= esc($requestTicket['tanggal']) ?></dd></div>
                </dl>
                <p class="ticket-disclaimer">Ini adalah bukti permintaan, bukan tiket masuk atau reservasi yang sudah dikonfirmasi. Pengelola akan menghubungimu untuk mengecek jadwal, ketersediaan, dan pembayaran.</p>
                <div class="ticket-actions">
                    <button class="button" type="button" data-ticket-download data-ticket-code="<?= esc($requestTicket['kode'], 'attr') ?>" data-ticket-name="<?= esc($requestTicket['nama'], 'attr') ?>" data-ticket-package="<?= esc($requestTicket['tiket'], 'attr') ?>" data-ticket-option="<?= esc($requestTicket['paket'], 'attr') ?>" data-ticket-date="<?= esc($requestTicket['tanggal'], 'attr') ?>">Unduh tiket <span aria-hidden="true">↓</span></button>
                    <button class="button button-outline" type="button" data-ticket-print>Cetak / simpan PDF</button>
                </div>
            </section>
        <?php endif; ?>
        <?php if (session()->getFlashdata('booking_error')): ?>
            <div class="notice notice-error" role="alert"><?= esc(session()->getFlashdata('booking_error')) ?></div>
        <?php endif; ?>
        <form class="booking-form" action="<?= base_url('save') ?>" method="post">
            <?= csrf_field() ?>
            <div class="field"><label for="booking-name">Nama lengkap</label><input id="booking-name" name="nama" type="text" autocomplete="name" maxlength="100" required value="<?= esc(old('nama') ?? '') ?>"></div>
            <div class="field"><label for="booking-phone">Nomor WhatsApp</label><input id="booking-phone" name="no_hp" type="tel" autocomplete="tel" maxlength="20" required value="<?= esc(old('no_hp') ?? '') ?>"></div>
            <div class="field"><label for="booking-email">Email</label><input id="booking-email" name="email" type="email" autocomplete="email" maxlength="100" required value="<?= esc(old('email') ?? '') ?>"></div>
            <div class="field"><label for="booking-package">Paket yang diminati</label><select id="booking-package" name="tiket" required>
                <option value="">Pilih paket</option>
                <option <?= old('tiket') === 'Balkondes' ? 'selected' : '' ?>>Balkondes</option>
                <option <?= old('tiket') === 'Room Mahika' ? 'selected' : '' ?>>Room Mahika</option>
                <option <?= old('tiket') === 'Paket Study' ? 'selected' : '' ?>>Paket Study</option>
                <option <?= old('tiket') === 'Jeep Breksi' ? 'selected' : '' ?>>Jeep Breksi</option>
                <option <?= old('tiket') === 'Camping Mahika Ayu' ? 'selected' : '' ?>>Camping Mahika Ayu</option>
            </select></div>
            <div class="field field-full"><label for="booking-type">Pilihan paket / jenis</label><select id="booking-type" name="jenis" data-current-type="<?= esc(old('jenis') ?? '') ?>" required>
                <option value="">Pilih paket terlebih dahulu</option>
                <optgroup label="Balkondes"><option>Family Room</option><option>Couple Room</option><option>Extra Bed</option></optgroup>
                <optgroup label="Room Mahika"><option>Couple Room Mahika</option></optgroup>
                <optgroup label="Paket Study"><option>Paket Sambi 1</option><option>Paket Sambi 2</option><option>Paket Sambi 3</option><option>Paket Sambi A</option><option>Paket Sambi B</option><option>Paket Sambi C</option></optgroup>
                <optgroup label="Jeep Breksi"><option>Short Trip Atas</option><option>Short Trip Bawah</option><option>Medium Trip</option><option>Long Trip</option></optgroup>
                <optgroup label="Camping Mahika Ayu"><option>Paket Mandiri</option><option>Paket Relax</option><option>Paket Regular</option><option>Paket Medium</option><option>Paket Premium</option><option>Paket Campervan</option></optgroup>
            </select></div>
            <div class="field field-full"><p class="form-note">Harga dan ketersediaan perlu dikonfirmasi langsung kepada pengelola. Formulir ini belum merupakan konfirmasi reservasi.</p></div>
            <button class="button" type="submit">Kirim permintaan <span aria-hidden="true">↗</span></button>
        </form>
    </section>
</section>
<script src="<?= base_url('js/booking.js') ?>" defer></script>
<script src="<?= base_url('js/ticket.js') ?>" defer></script>
