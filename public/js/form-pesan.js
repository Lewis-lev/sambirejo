const form1 = document.getElementById('form1')
const form2 = document.getElementById('form2')
const form3 = document.getElementById('form3')
const form4 = document.getElementById('form4')
const form5 = document.getElementById('form5')

const pesan1 = document.getElementById('pesan1')
const pesan2 = document.getElementById('pesan2')
const pesan3 = document.getElementById('pesan3')
const pesan4 = document.getElementById('pesan4')
const pesan5 = document.getElementById('pesan5')

pesan1.addEventListener('click', () => {
    form1.showModal();
})
pesan2.addEventListener('click', () => {
    form2.showModal();
})
pesan3.addEventListener('click', () => {
    form3.showModal();
})
pesan4.addEventListener('click', () => {
    form4.showModal();
})
pesan5.addEventListener('click', () => {
    form5.showModal();
})

window.onclick = function(event) {
    if (event.target == form1) {
      form1.close();
    } else if (event.target == form2) {
      form2.close();
    } else if (event.target == form3) {
      form3.close();
    } else if (event.target == form4) {
      form4.close();
    } else if (event.target == form5) {
      form5.close();
    }
}
    