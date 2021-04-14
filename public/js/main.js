const regBtn = document.querySelector('.btn-reg.continue')
const prev = document.querySelector('.prev')
let currentphase = 0; // Current phase is set to be the first phase (0)
showphase(currentphase); // Display the current phase


function showphase(n) {
    // This function will display the specified phase of the form ...
    let x = document.getElementsByClassName("phase");
    x[n].style.display = "flex";
    if (n == 0) {
        document.querySelector(".prev").style.display = "none";
    } else {
        document.querySelector(".prev").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.querySelector(".btn-reg.continue").innerHTML = "Submit";
    } else {
        document.querySelector(".btn-reg.continue").innerHTML = "Continue";
    }
}

function nextPrev(n) {
    // This function will figure out which phase to display
    let x = document.getElementsByClassName("phase");
    // Hide the current phase:
    x[currentphase].style.display = "none";
    // Increase or decrease the current phase by 1:
    currentphase = currentphase + n;
    // if you have reached the end of the form... :
    if (currentphase >= x.length) {
        //...the form gets submitted:
        document.getElementById("form-submit").addEventListener('submit', e => {

        });
        return false;
    }
    // Otherwise, display the correct phase:
    showphase(currentphase);
}

regBtn.addEventListener('click', e => {
    e.preventDefault()
    nextPrev(1)
})
prev.addEventListener('click', e => {
    e.preventDefault()
    nextPrev(-1)
})