let carousel = document.getElementById("carousel");

let currentImg = 1;

setInterval(function() {

    if (currentImg == 5) { currentImg = 1; }

    carousel.setAttribute('src', `assets/img/login/carousel/${currentImg}.jpg`);
    currentImg++;

}, 6000);