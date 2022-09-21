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