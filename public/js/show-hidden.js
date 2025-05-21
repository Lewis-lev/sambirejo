const sejarah = document.getElementById('sejarah-desa')
const kisah = document.getElementById('kisah-desa')

const sejarah_button = document.getElementById('sejarah-button')
const kisah_button = document.getElementById('kisah-button')

sejarah_button.onclick = function () {
    sejarah.style.display = "block"
    kisah.style.display = "none"
}

kisah_button.onclick = function () {
    sejarah.style.display = "none"
    kisah.style.display = "block"
}



