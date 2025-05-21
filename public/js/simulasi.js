// const paket_balkondes = document.getElementById('paket-balkondes');
// const paket_rmahika = document.getElementById('paket-rmahika');
// const paket_study = document.getElementById('paket-study');
// const paket_jeep = document.getElementById('paket-jeep');
// const paket_cmahika = document.getElementById('paket-cmahika');

// document.getElementById('tkt').addEventListener('change', function() {
//   if (this.value === 'balkondes') {
//     paket_balkondes.style.display    = 'contents';
//     paket_rmahika.style.display      = 'none';
//     paket_study.style.display        = 'none';
//     paket_jeep.style.display         = 'none';
//     paket_cmahika.style.display      = 'none';
//   } else if (this.value === 'room_mahika') {
//     paket_balkondes.style.display    = 'none';
//     paket_rmahika.style.display      = 'contents';
//     paket_study.style.display        = 'none';
//     paket_jeep.style.display         = 'none';
//     paket_cmahika.style.display      = 'none';
//   } else if (this.value === 'paket_study') {
//     paket_balkondes.style.display    = 'none';
//     paket_rmahika.style.display      = 'none';
//     paket_study.style.display        = 'contents';
//     paket_jeep.style.display         = 'none';
//     paket_cmahika.style.display      = 'none';
//   } else if (this.value === 'jeep_breksi') {
//     paket_balkondes.style.display    = 'none';
//     paket_rmahika.style.display      = 'none';
//     paket_study.style.display        = 'none';
//     paket_jeep.style.display         = 'contents';
//     paket_cmahika.style.display      = 'none';
//   } else {
//     paket_balkondes.style.display    = 'none';
//     paket_rmahika.style.display      = 'none';
//     paket_study.style.display        = 'none';
//     paket_jeep.style.display         = 'none';
//     paket_cmahika.style.display      = 'contents';
//   }
// });

$(document).ready(function () {
  $("#jenis").change(function () {
      var val = $(this).val();
      if (val == "Family Room") {
          $("#harga").val("2200000").trigger('input');
      } else if (val == "Couple Room") {
          $("#harga").val("600000").trigger('input');
      } else if (val == "Extra Bed") {
          $("#harga").val("110000").trigger('input');
      } else if (val == "Couple Room Mahika") {
          $("#harga").val("500000").trigger('input');
      } else if (val == "Paket Sambi 1") {
          $("#harga").val("95000").trigger('input');
      } else if (val == "Paket Sambi 2") {
          $("#harga").val("120000").trigger('input');
      } else if (val == "Paket Sambi 3") {
          $("#harga").val("145000").trigger('input');
      } else if (val == "Paket Sambi A") {
          $("#harga").val("150000").trigger('input');
      } else if (val == "Paket Sambi B") {
          $("#harga").val("180000").trigger('input');
      } else if (val == "Paket Sambi C") {
          $("#harga").val("220000").trigger('input');
      } else if (val == "Short Trip Atas") {
          $("#harga").val("360000").trigger('input');
      } else if (val == "Short Trip Bawah") {
          $("#harga").val("360000").trigger('input');
      } else if (val == "Medium Trip") {
          $("#harga").val("450000").trigger('input');
      } else if (val == "Long Trip") {
          $("#harga").val("600000").trigger('input');
      } else if (val == "Paket Mandiri") {
          $("#harga").val("50000").trigger('input');
      } else if (val == "Paket Relax") {
          $("#harga").val("350000").trigger('input');
      } else if (val == "Paket Regular") {
          $("#harga").val("450000").trigger('input');
      } else if (val == "Paket Medium") {
          $("#harga").val("575000").trigger('input');
      } else if (val == "Paket Premium") {
          $("#harga").val("695000").trigger('input');
      } else if (val == "Paket Campervan") {
          $("#harga").val("1500000").trigger('input');
      }
  });

  $(document).on('input', '#jml_ung, #harga, #duration', function() {
    var jml_ung = parseFloat($("#jml_ung").val());
    var harga = parseFloat($("#harga").val());
    var duration = parseFloat($("#duration").val());

    var jml = document.getElementById('jml');
    var price = document.getElementById('price');
    var kmbl = document.getElementById('kmbl');

    var hasil = isNaN(harga) || isNaN(duration) ? 0 : harga * duration; 
    var sisa = isNaN(jml_ung) ? 0 : jml_ung - hasil;

    price.value = hasil;
    jml.value = hasil.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
    kmbl.value = sisa.toLocaleString('id-ID', { style: 'currency', currency: 'IDR' });
  });  

});

$("#duration").on('input', function() {
  var value = $(this).val();
  if (value < 0) {
    $(this).val(1);
  }
});
