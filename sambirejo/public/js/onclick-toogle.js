// Get the modal
var modal1 = document.getElementById("modal1");
var modal2 = document.getElementById("modal2");
var modal3 = document.getElementById("modal3");

// Get the button that opens the modal
var card1 = document.getElementById("card1");
var card2 = document.getElementById("card2");
var card3 = document.getElementById("card3");

// When the user clicks the button, open the modal
// card1.onclick = function() {
//   modal1.style.display = "block";
// }

card1.addEventListener('click', () => {
  modal1.showModal();
})

card2.addEventListener('click', () => {
  modal2.showModal();
})

card3.addEventListener('click', () => {
  modal3.showModal();
})

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    // modal1.style.display = "none";
    modal1.close();
  } else if (event.target == modal2) {
    modal2.close();
  } else if (event.target == modal3) {
    modal3.close();
  }

  else if (event.target == modal_breksi) {
    modal_breksi.close();
  }
  else if (event.target == modal_balkondes) {
    modal_balkondes.close();
  }
  else if (event.target == modal_lesung) {
    modal_lesung.close();
  }
  else if (event.target == modal_watulangit) {
    modal_watulangit.close();
  }
  else if (event.target == modal_abhayagiri) {
    modal_abhayagiri.close();
  }
  else if (event.target == modal_tebingb) {
    modal_tebingb.close();
  }
  else if (event.target == modal_watutapak) {
    modal_watutapak.close();
  }
  else if (event.target == modal_paralayang) {
    modal_paralayang.close();
  }
  else if (event.target == modal_riyadi) {
    modal_riyadi.close();
  }
  else if (event.target == modal_watupayung) {
    modal_watupayung.close();
  }
  else if (event.target == modal_barong) {
    modal_barong.close();
  }
  else if (event.target == modal_ijo) {
    modal_ijo.close();
  }
  else if (event.target == modal_candari) {
    modal_candari.close();
  }
  else if (event.target == modal_nisa) {
    modal_nisa.close();
  }
  else if (event.target == modal_lestari) {
    modal_lestari.close();
  }
  else if (event.target == modal_hs_balkondes) {
    modal_hs_balkondes.close();
  }
  else if (event.target == modal_aramanta) {
    modal_aramanta.close();
  }
}

