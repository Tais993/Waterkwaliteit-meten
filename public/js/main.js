let data = document.getElementById('data-cards');
let info = document.getElementById('info-cards');

function display() {
    if (info.style.display == 'flex') {
        info.style.display = 'none';
        data.style.display = 'flex';

    } else {
        data.style.display = 'none';
        info.style.display = 'flex';
    }
}

let modal = document.getElementById("sen-161123-modal");
let btn = document.getElementById("sen-161123-btn");
let span = document.getElementsByClassName("close")[0];

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
