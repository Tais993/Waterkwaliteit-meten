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

// Get all elements with class "details-btn" (assuming you use this class for your buttons)
let buttons = document.querySelectorAll(".details-btn");

// Set up event listeners for each button
buttons.forEach(function (button) {
    button.onclick = function () {
        // Get the modal ID from the button's ID
        let modalId = button.id;

        // Get the corresponding modal element
        let modal = document.getElementById('modal-' + modalId);

        // Open the modal
        if (modal) {
            modal.style.display = "block";
        }
    }
});

// Set up event listener for the close button
let span = document.getElementsByClassName("close")[0];
span.onclick = function () {
    closeModals();
}

// Set up event listener to close the modal when clicking outside it
window.onclick = function (event) {
    if (event.target.classList.contains("modal")) {
        closeModals();
    }
}

// Function to close all modals
function closeModals() {
    let modals = document.querySelectorAll(".modal");
    modals.forEach(function (modal) {
        modal.style.display = "none";
    });
}
