const ticketDownload = document.querySelector('[data-ticket-download]');
const ticketPrint = document.querySelector('[data-ticket-print]');

function escapeTicketValue(value) {
  return value.replace(/[&<>"']/g, (character) => ({
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#39;',
  })[character]);
}

if (ticketDownload) {
  ticketDownload.addEventListener('click', () => {
    const details = {
      code: ticketDownload.dataset.ticketCode || '',
      name: ticketDownload.dataset.ticketName || '',
      packageName: ticketDownload.dataset.ticketPackage || '',
      option: ticketDownload.dataset.ticketOption || '',
      date: ticketDownload.dataset.ticketDate || '',
    };
    const safe = Object.fromEntries(
      Object.entries(details).map(([key, value]) => [key, escapeTicketValue(value)]),
    );
    const ticket = `<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tiket permintaan ${safe.code} · Sambirejo</title>
  <style>
    *{box-sizing:border-box}body{margin:0;padding:32px;background:#f5f5ef;color:#26382d;font:15px/1.6 Arial,sans-serif}
    main{max-width:680px;margin:6vh auto;padding:36px;border:1px solid #e4e6de;border-radius:20px;background:#fffefa}
    header{display:flex;justify-content:space-between;align-items:center;padding-bottom:22px;border-bottom:1px solid #e7e9e1}
    header strong{color:#174f3b;font-size:19px}.type,.label{color:#77837a;font-size:11px;text-transform:uppercase;letter-spacing:.08em}
    h1{margin:26px 0 8px;font-size:28px;line-height:1.2}.lead{color:#66736b}
    .code{margin:24px 0;padding:18px;border-radius:12px;background:#174f3b;color:white}.code span{display:block;color:#dce8d7;font-size:10px;letter-spacing:.12em}.code strong{font-size:30px;letter-spacing:.09em}
    dl{display:grid;grid-template-columns:1fr 1fr;gap:18px;margin:26px 0}dl div{padding:0 0 12px;border-bottom:1px solid #eceee8}dt{color:#77837a;font-size:11px}dd{margin:4px 0 0;font-weight:bold}
    .notice{padding:14px;border-radius:10px;background:#f7f5ef;color:#66736b;font-size:12px}
    .print{margin-top:20px;padding:11px 16px;border:0;border-radius:8px;background:#174f3b;color:white;font-weight:bold;cursor:pointer}
    @media print{body{padding:0;background:white}main{max-width:none;margin:0;padding:24px;border:0;border-radius:0}}
    @media print{.print{display:none}}
    @media(max-width:520px){body{padding:12px}main{margin:0;padding:23px}dl{grid-template-columns:1fr}}
  </style>
</head>
<body>
  <main>
    <header><strong>Sambirejo · Desa Wisata</strong><span class="type">Konfirmasi permintaan</span></header>
    <h1>Permintaanmu sudah terkirim.</h1>
    <p class="lead">Simpan kode referensi ini dan sertakan saat menghubungi pengelola.</p>
    <div class="code"><span>KODE REFERENSI</span><strong>${safe.code}</strong></div>
    <dl>
      <div><dt>Nama</dt><dd>${safe.name}</dd></div>
      <div><dt>Paket wisata</dt><dd>${safe.packageName}</dd></div>
      <div><dt>Pilihan</dt><dd>${safe.option}</dd></div>
      <div><dt>Tanggal permintaan</dt><dd>${safe.date}</dd></div>
    </dl>
    <p class="notice">Ini adalah bukti permintaan, bukan tiket masuk atau reservasi yang sudah dikonfirmasi. Pengelola akan menghubungimu untuk memastikan jadwal, ketersediaan, dan pembayaran.</p>
    <button class="print" type="button" onclick="window.print()">Cetak / Simpan PDF</button>
  </main>
</body>
</html>`;
    const downloadUrl = URL.createObjectURL(new Blob([ticket], { type: 'text/html;charset=utf-8' }));
    const link = document.createElement('a');
    link.href = downloadUrl;
    link.download = `Sambirejo-Permintaan-${details.code}.html`;
    document.body.append(link);
    link.click();
    link.remove();
    window.setTimeout(() => URL.revokeObjectURL(downloadUrl), 1000);
  });
}

if (ticketPrint) {
  ticketPrint.addEventListener('click', () => window.print());
}
