const buttonRight = document.getElementById('slideRight');
const buttonLeft = document.getElementById('slideLeft');
const container = document.getElementById('container');

const wisata_buttonRight = document.getElementById('wisata-slideRight');
const wisata_buttonLeft = document.getElementById('wisata-slideLeft');
const wisata_container = document.getElementById('wisata-container');

const kuliner_buttonRight = document.getElementById('kuliner-slideRight');
const kuliner_buttonLeft = document.getElementById('kuliner-slideLeft');
const kuliner_container = document.getElementById('kuliner-container');

const penginapan_buttonRight = document.getElementById('penginapan-slideRight');
const penginapan_buttonLeft = document.getElementById('penginapan-slideLeft');
const penginapan_container = document.getElementById('penginapan-container');


buttonRight.onclick = function () {
  container.scrollLeft += 1000;
};
buttonLeft.onclick = function () {
  container.scrollLeft -= 1000;
};

wisata_buttonRight.onclick = function () {
  wisata_container.scrollLeft += 350;
};
wisata_buttonLeft.onclick = function () {
  wisata_container.scrollLeft -= 350;
};

kuliner_buttonRight.onclick = function () {
  kuliner_container.scrollLeft += 350;
};
kuliner_buttonLeft.onclick = function () {
  kuliner_container.scrollLeft -= 350;
};

penginapan_buttonRight.onclick = function () {
  penginapan_container.scrollLeft += 350;
};
penginapan_buttonLeft.onclick = function () {
  penginapan_container.scrollLeft -= 350;
};

