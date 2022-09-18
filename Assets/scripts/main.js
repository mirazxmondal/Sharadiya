console.log("starting main js");


//  Dhak sound

const dhak = new Audio("Assets/audio/dhak.mp3");

const explore = document.querySelector(".carousel");

explore.addEventListener("mouseenter", () => {
    dhak.volume = 0.1;
    dhak.play();
    console.log("clicked");
});

explore.addEventListener("mouseleave", () => {

    dhak.pause();
    console.log("clicked");
});