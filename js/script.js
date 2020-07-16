
// Slick slider initialiser
$(document).ready(function () {
    $('#default-demo').slick({
        slidesToShow: 3,
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
sr.reveal('step1', {
    origin: 'top',
    distance: '100px',
    duration: 5000,
    opacity: 0,
    scale: 0.2
});
sr.reveal('img-fluid', {
    duration: 2000,
    delay: 1000,
    origin: 'left',
    distance: '300px',
    opacity: 0,
    scale: 0.8
});
