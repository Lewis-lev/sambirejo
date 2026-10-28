$(document).ready(function () {
    const table = $('#myTable');

    if (table.length) {
        table.DataTable({
            pageLength: 10,
            order: [],
            language: {
                search: 'Cari:',
                searchPlaceholder: 'Nama, kode, paket...',
                lengthMenu: 'Tampilkan _MENU_ pesanan',
                zeroRecords: 'Pesanan tidak ditemukan',
                emptyTable: 'Belum ada data pesanan',
                info: 'Menampilkan _START_–_END_ dari _TOTAL_ pesanan',
                infoEmpty: 'Belum ada pesanan',
                infoFiltered: '(disaring dari _MAX_ pesanan)',
                paginate: {
                    first: 'Pertama',
                    last: 'Terakhir',
                    next: 'Berikutnya',
                    previous: 'Sebelumnya'
                }
            }
        });
    }
});