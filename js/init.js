/*CAROUSEL*/
$(document).ready(function () {
    $('.carousel').carousel({
        dist: 0, shift: 0, padding: 20
    });
    $(document).scroll(function () {
        if ($(window).scrollTop() === 0) {
            $('.fixed-action-btn').fadeOut(250);
        } else {
            $('.fixed-action-btn').fadeIn(250);
        }
    });
    $('.parallax').parallax();
    $('.modal').modal();
    $('select').material_select();
    $('.slider').slider();
});

$('.carousel.carousel-slider').carousel({fullWidth: true});

/*SCROLLTOP*/
$('body').materialScrollTop();

/*ALERT*/
function warn() {
    alert('Errore');
    document.write('Credenziali errate');
}
