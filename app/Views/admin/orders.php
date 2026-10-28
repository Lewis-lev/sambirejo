<?php
$pages = [
    'all' => [
        'eyebrow' => 'Ringkasan kunjungan',
        'title' => 'Semua pesanan',
        'description' => 'Pantau permintaan wisata dan perbarui status pelayanan dari satu tempat.',
        'empty' => 'Pesanan akan muncul di sini saat wisatawan mengirim permintaan.',
        'clear' => 'table/deleteAll',
        'paidAction' => 'table/status/',
        'visitedAction' => 'table/kondisi/',
        'deleteAction' => 'table/delete/',
    ],
    'paid' => [
        'eyebrow' => 'Pembayaran',
        'title' => 'Pesanan sudah membayar',
        'description' => 'Pesanan yang sudah ditandai lunas.',
        'empty' => 'Belum ada pesanan yang ditandai sudah membayar.',
        'clear' => 'status/deleteAll',
        'paidAction' => 'status/status/',
        'visitedAction' => 'table/kondisi/',
        'deleteAction' => 'status/delete/',
    ],
    'unpaid' => [
        'eyebrow' => 'Pembayaran',
        'title' => 'Menunggu pembayaran',
        'description' => 'Pantau pesanan yang masih menunggu konfirmasi pembayaran.',
        'empty' => 'Semua pesanan sudah ditandai membayar.',
        'clear' => 'status/deleteAll1',
        'paidAction' => 'status/status1/',
        'visitedAction' => 'table/kondisi/',
        'deleteAction' => 'status/delete1/',
    ],
    'visited' => [
        'eyebrow' => 'Kunjungan',
        'title' => 'Wisatawan sudah berkunjung',
        'description' => 'Daftar pesanan yang kunjungannya telah ditandai selesai.',
        'empty' => 'Belum ada kunjungan yang ditandai selesai.',
        'clear' => 'kunjungan/deleteAll',
        'paidAction' => 'table/status/',
        'visitedAction' => 'kondisi/kondisi/',
        'deleteAction' => 'kondisi/delete/',
    ],
    'not-visited' => [
        'eyebrow' => 'Kunjungan',
        'title' => 'Menunggu kunjungan',
        'description' => 'Daftar pesanan yang belum ditandai sudah berkunjung.',
        'empty' => 'Semua kunjungan sudah ditandai selesai.',
        'clear' => 'kunjungan/deleteAll1',
        'paidAction' => 'table/status/',
        'visitedAction' => 'kondisi/kondisi1/',
        'deleteAction' => 'kondisi/delete1/',
    ],
];
$page = $pages[$mode] ?? $pages['all'];
?>

<section class="admin-page-heading">
    <div>
        <span class="admin-eyebrow"><?= esc($page['eyebrow']) ?></span>
        <h1><?= esc($page['title']) ?></h1>
        <p><?= esc($page['description']) ?></p>
    </div>
    <div class="admin-heading-meta">
        <span class="admin-date"><?= esc(date('l, d F Y')) ?></span>
        <a class="admin-public-link" href="<?= base_url('paket') ?>">Lihat paket wisata ↗</a>
    </div>
</section>

<section class="admin-summary" aria-label="Ringkasan pesanan">
    <article class="summary-card">
        <span class="summary-icon summary-icon-green" aria-hidden="true">▦</span>
        <div><span class="summary-label">Dalam tampilan ini</span><strong><?= number_format(count($pesanan), 0, ',', '.') ?></strong><small>pesanan</small></div>
    </article>
    <article class="summary-card">
        <span class="summary-icon summary-icon-amber" aria-hidden="true">◷</span>
        <div><span class="summary-label">Pembayaran</span><strong><?= $mode === 'paid' ? 'Lunas' : ($mode === 'unpaid' ? 'Menunggu' : 'Pantau') ?></strong><small><?= $mode === 'paid' ? 'sudah dibayar' : ($mode === 'unpaid' ? 'belum dibayar' : 'konfirmasi status') ?></small></div>
    </article>
    <article class="summary-card">
        <span class="summary-icon summary-icon-clay" aria-hidden="true">⌖</span>
        <div><span class="summary-label">Kehadiran</span><strong><?= in_array($mode, ['visited', 'not-visited'], true) ? ($mode === 'visited' ? 'Selesai' : 'Terjadwal') : 'Pantau' ?></strong><small><?= $mode === 'visited' ? 'sudah berkunjung' : ($mode === 'not-visited' ? 'belum berkunjung' : 'konfirmasi kunjungan') ?></small></div>
    </article>
</section>

<section class="admin-orders-card">
    <div class="orders-toolbar">
        <div>
            <h2>Daftar pesanan</h2>
            <p>Gunakan pencarian untuk menemukan pesanan dengan cepat.</p>
        </div>
        <?php if (count($pesanan) > 0): ?>
            <a class="admin-danger-link" href="<?= base_url($page['clear']) ?>" data-confirm="Hapus seluruh pesanan yang ada di tampilan ini? Tindakan ini tidak dapat dibatalkan."><span aria-hidden="true">⌫</span> Hapus semua</a>
        <?php endif; ?>
    </div>

    <?php if (count($pesanan) > 0): ?>
        <div class="admin-table-scroll">
            <table id="myTable" class="admin-table">
                <thead>
                    <tr>
                        <th>Pesanan</th>
                        <th>Wisatawan</th>
                        <th>Kontak</th>
                        <th>Paket wisata</th>
                        <?php if ($mode === 'all'): ?><th>Tanggal pesan</th><?php endif; ?>
                        <?php if (! in_array($mode, ['paid', 'unpaid'], true)): ?><th>Pembayaran</th><?php endif; ?>
                        <?php if (! in_array($mode, ['visited', 'not-visited'], true)): ?><th>Kunjungan</th><?php endif; ?>
                        <th><span class="sr-only">Aksi</span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pesanan as $row): ?>
                        <tr>
                            <td><span class="order-code"><?= esc($row['kode']) ?></span><?php if ($mode === 'all'): ?><small class="order-date-mobile"><?= esc($row['date']) ?></small><?php endif; ?></td>
                            <td><strong class="customer-name"><?= esc($row['nama']) ?></strong></td>
                            <td>
                                <a class="contact-link" href="https://wa.me/<?= esc($row['no_hp'], 'attr') ?>" target="_blank" rel="noopener noreferrer"><?= esc($row['no_hp']) ?> <span aria-hidden="true">↗</span></a>
                                <a class="contact-email" href="mailto:<?= esc($row['email'], 'attr') ?>"><?= esc($row['email']) ?></a>
                            </td>
                            <td><strong class="package-name"><?= esc($row['tiket']) ?></strong><small class="package-type"><?= esc($row['paket']) ?></small></td>
                            <?php if ($mode === 'all'): ?><td class="order-date"><?= esc($row['date']) ?></td><?php endif; ?>
                            <?php if (! in_array($mode, ['paid', 'unpaid'], true)): ?>
                                <td><a class="status-pill <?= (int) $row['status'] === 1 ? 'is-complete' : 'is-pending' ?>" href="<?= base_url($page['paidAction'] . $row['id']) ?>" aria-label="<?= (int) $row['status'] === 1 ? 'Tandai belum membayar' : 'Tandai sudah membayar' ?>: <?= esc($row['nama'], 'attr') ?>"><span aria-hidden="true"><?= (int) $row['status'] === 1 ? '✓' : '◷' ?></span><?= (int) $row['status'] === 1 ? 'Lunas' : 'Menunggu' ?></a></td>
                            <?php endif; ?>
                            <?php if (! in_array($mode, ['visited', 'not-visited'], true)): ?>
                                <td><a class="status-pill <?= (int) $row['kondisi'] === 1 ? 'is-complete' : 'is-neutral' ?>" href="<?= base_url($page['visitedAction'] . $row['id']) ?>" aria-label="<?= (int) $row['kondisi'] === 1 ? 'Tandai belum berkunjung' : 'Tandai sudah berkunjung' ?>: <?= esc($row['nama'], 'attr') ?>"><span aria-hidden="true"><?= (int) $row['kondisi'] === 1 ? '✓' : '·' ?></span><?= (int) $row['kondisi'] === 1 ? 'Selesai' : 'Terjadwal' ?></a></td>
                            <?php endif; ?>
                            <td class="order-actions">
                                <?php if (in_array($mode, ['paid', 'unpaid'], true)): ?>
                                    <a class="status-pill <?= (int) $row['status'] === 1 ? 'is-complete' : 'is-pending' ?>" href="<?= base_url($page['paidAction'] . $row['id']) ?>" aria-label="<?= (int) $row['status'] === 1 ? 'Tandai belum membayar' : 'Tandai sudah membayar' ?>: <?= esc($row['nama'], 'attr') ?>"><?= (int) $row['status'] === 1 ? 'Lunas' : 'Tandai lunas' ?></a>
                                <?php elseif (in_array($mode, ['visited', 'not-visited'], true)): ?>
                                    <a class="status-pill <?= (int) $row['kondisi'] === 1 ? 'is-complete' : 'is-neutral' ?>" href="<?= base_url($page['visitedAction'] . $row['id']) ?>" aria-label="<?= (int) $row['kondisi'] === 1 ? 'Tandai belum berkunjung' : 'Tandai sudah berkunjung' ?>: <?= esc($row['nama'], 'attr') ?>"><?= (int) $row['kondisi'] === 1 ? 'Selesai' : 'Tandai selesai' ?></a>
                                <?php endif; ?>
                                <a class="delete-order" href="<?= base_url($page['deleteAction'] . $row['id']) ?>" aria-label="Hapus pesanan <?= esc($row['kode'], 'attr') ?>" data-confirm="Hapus pesanan <?= esc($row['kode'], 'attr') ?> milik <?= esc($row['nama'], 'attr') ?>?">
                                    <span aria-hidden="true">×</span>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="admin-empty">
            <span class="empty-icon" aria-hidden="true">▦</span>
            <h3>Belum ada data</h3>
            <p><?= esc($page['empty']) ?></p>
            <a class="button" href="<?= base_url('paket') ?>">Lihat halaman paket ↗</a>
        </div>
    <?php endif; ?>
</section>
