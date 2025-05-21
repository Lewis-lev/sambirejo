const wisata_buttonRight = document.getElementById('wisata-slideRight');
const wisata_buttonLeft = document.getElementById('wisata-slideLeft');
const wisata_container = document.getElementById('wisata-container');

wisata_buttonRight.onclick = function () {
  wisata_container.scrollLeft += 1000;
};
wisata_buttonLeft.onclick = function () {
  wisata_container.scrollLeft -= 1000;
};
