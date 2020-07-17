// Countdown timer
// Set the date to countdown to
var countDownDate = new Date("Aug 15, 2020 12:00:00").getTime();

// Update the countdown timer every 1 second
var t = setInterval(function () {

    // Get today's date and time
    var now = new Date().getTime();

    //Find the distance between now and the countdown date
    var distance = countDownDate - now;

    // Time calculation for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / (1000));

    // Display the timer in the html element
    var timer = document.getElementsByClassName("cdtimer");
    timer[0].innerHTML = days;
    timer[1].innerHTML = hours;
    timer[2].innerHTML = minutes;
    timer[3].innerHTML = seconds;

    // When timer ends, show text
    if (distance < 0) {
        clearInterval(t);
        timer.innerHTML = "APP LAUNCH!!!";
    }

}, 1000);
// Countdown timer end

// Slick slider initialiser
$(document).ready(function () {
    $('#default-demo').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: true,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});

// Slick lightbox feature
$('#default-demo').slickLightbox({
    caption: 'caption',
    useHistoryApi: 'true'
});
// Slick slider end


// Scroll reveal animation
window.sr = ScrollReveal();
sr.reveal('#default-demo', {
    duration: 2000,
    origin: 'top',
    distance: '100px',
    duration: 1000,
    opacity: 0,
    scale: 0.8
});
sr.reveal('.logo', {
    origin: 'top',
    distance: '100px',
    duration: 2000,
    opacity: 0,
    scale: 0.2
});
sr.reveal('.heromockup', {
    duration: 2000,
    delay: 1000,
    origin: 'right',
    distance: '300px',
    opacity: 0,
    scale: 0.8
});
sr.reveal('.intro h1', {
    duration: 2000,
    delay: 1000,
    origin: 'left',
    distance: '300px',
    opacity: 0,
    scale: 0.8
});
sr.reveal('.intro p', {
    duration: 2000,
    delay: 1500,
    origin: 'bottom',
    distance: '200px',
    opacity: 0,
    scale: 0.8
});
sr.reveal('.intro h2', {
    duration: 2000,
    delay: 2000,
    origin: 'left',
    distance: '500px',
    opacity: 0.8,
    scale: 0.8
});
sr.reveal('.countdown', {
    duration: 2000,
    delay: 2000,
    //origin: 'bottom',
    //distance: '300px',
    opacity: 0,
    scale: 0.5
});
sr.reveal('.service', {
    duration: 2000,
    //delay: 1000,
    origin: 'right',
    distance: '300px',
    opacity: 0,
    scale: 0.8
});
sr.reveal('.mock-left', {
    duration: 2000,
    //delay: 1000,
    origin: 'left',
    distance: '400px',
    opacity: 0,
    scale: 0.8
});
sr.reveal('.mock-right', {
    duration: 2000,
    //delay: 1000,
    origin: 'right',
    distance: '400px',
    opacity: 0,
    scale: 0.8
});
sr.reveal('.stepdetail', {
    duration: 2000,
    //delay: 1000,
    //origin: 'right',
    distance: '300px',
    opacity: 0,
    scale: 0.8
});
// Scroll reveal animation end