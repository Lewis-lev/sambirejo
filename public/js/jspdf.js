var form_input1 = document.getElementById('form-input1')
var form_input2 = document.getElementById('form-input2')
var form_input3 = document.getElementById('form-input3')
var form_input4 = document.getElementById('form-input4')
var form_input5 = document.getElementById('form-input5')

form_input1.addEventListener('submit', function () {

  var kode = document.getElementById('kode1').value
  var tiket = document.getElementById('tiket1').value
  var jenis = document.getElementById('jenis1').value

  var doc = new jsPDF({
    orientation: "landscape",
    unit: "in",
    format: [7, 2]
  })

  var img = document.getElementById('tiket-img');
  doc.addImage(img, 'png', 0, 0, 7, 2, '', 'FAST');
  doc.text(kode, 5.5, .5);
  doc.text(kode, 2.8, 1.65);
  doc.text(tiket, 1.75, .96);
  doc.text(jenis, 1.75, 1.31);

  doc.save("Tiket Sambirejo.pdf");
});

form_input2.addEventListener('submit', function () {

  var kode = document.getElementById('kode2').value
  var tiket = document.getElementById('tiket2').value
  var jenis = document.getElementById('jenis2').value

  var doc = new jsPDF({
    orientation: "landscape",
    unit: "in",
    format: [7, 2]
  })

  var img = document.getElementById('tiket-img');
  doc.addImage(img, 'png', 0, 0, 7, 2, '', 'FAST');
  doc.text(kode, 5.5, .5);
  doc.text(kode, 2.8, 1.65);
  doc.text(tiket, 1.75, .96);
  doc.text(jenis, 1.75, 1.31);


  doc.save("Tiket Sambirejo.pdf");
});

form_input3.addEventListener('submit', function () {

  var kode = document.getElementById('kode3').value
  var tiket = document.getElementById('tiket3').value
  var jenis = document.getElementById('jenis4').value

  var doc = new jsPDF({
    orientation: "landscape",
    unit: "in",
    format: [7, 2]
  })

  var img = document.getElementById('tiket-img');
  doc.addImage(img, 'png', 0, 0, 7, 2, '', 'FAST');
  doc.text(kode, 5.5, .5);
  doc.text(kode, 2.8, 1.65);
  doc.text(tiket, 1.75, .96);
  doc.text(jenis, 1.75, 1.31);


  doc.save("Tiket Sambirejo.pdf");
});

form_input4.addEventListener('submit', function () {

  var kode = document.getElementById('kode4').value
  var tiket = document.getElementById('tiket4').value
  var jenis = document.getElementById('jenis4').value

  var doc = new jsPDF({
    orientation: "landscape",
    unit: "in",
    format: [7, 2]
  })

  var img = document.getElementById('tiket-img');
  doc.addImage(img, 'png', 0, 0, 7, 2, '', 'FAST');
  doc.text(kode, 5.5, .5);
  doc.text(kode, 2.8, 1.65);
  doc.text(tiket, 1.75, .96);
  doc.text(jenis, 1.75, 1.31);


  doc.save("Tiket Sambirejo.pdf");
});

form_input5.addEventListener('submit', function () {

  var kode = document.getElementById('kode5').value
  var tiket = document.getElementById('tiket5').value
  var jenis = document.getElementById('jenis5').value

  var doc = new jsPDF({
    orientation: "landscape",
    unit: "in",
    format: [7, 2]
  })

  var img = document.getElementById('tiket-img');
  doc.addImage(img, 'png', 0, 0, 7, 2, '', 'FAST');
  doc.text(kode, 5.5, .5);
  doc.text(kode, 2.8, 1.65);
  doc.text(tiket, 1.75, .96);
  doc.text(jenis, 1.75, 1.31);


  doc.save("Tiket Sambirejo.pdf");
});

doc.addImage(img, 'png', 0, 0, 5, 2.5);
