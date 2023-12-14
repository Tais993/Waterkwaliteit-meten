let navModal = document.getElementById("nav-modal");
let menu = document.getElementById("mobile-menu");
let closeMenu = document.getElementsByClassName(" nav-close")[0];

menu.onclick = function() {
  navModal.style.display = "block";
}

closeMenu.onclick = function() {
  navModal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == navModal) {
    navModal.style.display = "none";
  }
}


let data = document.getElementById('data-cards');
let info = document.getElementById('info-cards');

function display() {
    if (info.style.display == 'grid') {
        info.style.display = 'none';
        data.style.display = 'grid';

    } else {
        data.style.display = 'none';
        info.style.display = 'grid';
    }
}

let modal = document.getElementById("sen-161123-modal");
let btn = document.getElementById("sen-161123-btn");
let tr = document.getElementById("sen-161123-tr")
let span = document.getElementsByClassName("close")[0];

tr.onclick = function() {
  modal.style.display = "block";
}

btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}