<section class="page-hero">
    <div class="site-container page-intro">
        <span class="eyebrow">Susun rencana</span>
        <h1>Rancang hari yang pas di Sambirejo.</h1>
        <p>Buat estimasi sederhana untuk beberapa pilihan pengalaman dan lihat apakah sesuai anggaranmu.</p>
    </div>
</section>
<section class="site-container page-content">
    <div class="planner-layout">
        <section class="planner-card">
            <span class="eyebrow">Kalkulator perjalanan</span>
            <h2>Mulai dari yang kamu suka.</h2>
            <form class="planner-form" id="planner-form">
                <div class="field"><label for="planner-package">Pengalaman</label><select id="planner-package" required>
                    <option value="">Pilih pengalaman</option>
                    <option value="Balkondes">Balkondes</option><option value="Room Mahika">Room Mahika</option><option value="Paket Study">Paket Study</option><option value="Jeep Breksi">Jeep Breksi</option><option value="Camping Mahika Ayu">Camping Mahika Ayu</option>
                </select></div>
                <div class="field"><label for="planner-type">Jenis paket</label><select id="planner-type" required disabled><option value="">Pilih pengalaman terlebih dahulu</option></select></div>
                <div class="field"><label for="planner-duration">Durasi (hari)</label><input id="planner-duration" type="number" min="1" max="30" value="1" required></div>
                <div class="field"><label for="planner-budget">Anggaran (opsional)</label><input id="planner-budget" type="number" min="0" step="10000" placeholder="Contoh: 500000"></div>
                <button class="button field-full" type="submit">Hitung estimasi <span aria-hidden="true">↗</span></button>
            </form>
            <div class="planner-results" id="planner-results" aria-live="polite" hidden>
                <span>Estimasi pilihan ini</span><strong id="planner-estimate"></strong><p id="planner-budget-message"></p>
            </div>
            <p class="form-note">Estimasi mengacu pada daftar harga yang tersedia di situs dan tidak termasuk biaya tambahan. Konfirmasi harga terbaru kepada pengelola.</p>
        </section>
        <aside class="planner-aside">
            <h2>Rencana singkatmu</h2>
            <p>Tambahkan pengalaman untuk membandingkan perkiraan total biaya.</p>
            <ul class="planner-list" id="planner-list"><li class="planner-empty" id="planner-empty">Belum ada pengalaman ditambahkan.</li></ul>
            <div class="planner-total"><span>Total estimasi</span><span id="planner-total">Rp0</span></div>
            <button class="button button-light" id="planner-clear" type="button" style="margin-top:18px">Kosongkan rencana</button>
        </aside>
    </div>
</section>
<script src="<?= base_url('js/planner.js') ?>" defer></script>
