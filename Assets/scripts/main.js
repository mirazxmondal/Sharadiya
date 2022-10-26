console.log("starting main js");

//  Dhak sound

const dhak = new Audio("Assets/audio/dhak.mp3");

const explore = document.querySelector(".carousel");

explore.addEventListener("mouseenter", () => {
    dhak.volume = 0.1;
    dhak.play();
});

explore.addEventListener("mouseleave", () => {
    
    dhak.pause();
});


// welcome.php-file-js
// const submitBtn = document.getElementById('submit')
// const submitBtnhovered = document.getElementById('submit').value;

// submitBtn.onmouseover  = function () {
//     submitBtn.value = "CONFIRM UPLOAD"
// }
// submitBtn.onmouseout  = function() {
//     submitBtn.value = submitBtnhovered;
// }

// Modal for cookie
function cookieModalPop() {
    let modalPop = document.querySelector(".cookie-modal-overlay");
    modalPop.classList.remove("cookie-modal-hide");
}
setTimeout(cookieModalPop, 1000);

const cookieModalClose = () =>{
    let modalClose= document.querySelector(".cookie-modal-overlay")
    modalClose.classList.add("cookie-modal-hide")
}

let cookieBtns = document.querySelector(".cookie-modal-close")
cookieBtns.addEventListener("click", cookieModalClose)