/*INIZIALIZZAZIONE FUNZIONI*/

$(document).ready(function () {
    /*PARALLAX*/
    $('.parallax').parallax();
    /*MODAL*/
    $('.modal').modal();
    /*SELECT*/
    $('select').material_select();
    /*SLIDE*/
    $('.slider').slider();
    /*SCROLLTOP*/
    $('body').materialScrollTop();
    /*FULLSCREEN CAROUSEL*/
    $('.carousel.carousel-slider').carousel({fullWidth: true});
    /*CAROUSEL*/
    $('.carousel').carousel({
        dist: 0, shift: 0, padding: 20
    });
    /*SCROLLTOP*/
    $(document).scroll(function () {
        if ($(window).scrollTop() === 0) {
            $('#btt').fadeOut(300);
        } else {
            $('#btt').fadeIn(250);
        }
    });
});
function prev(){
    $('.carousel').carousel('prev');
}
function next(){
    $('.carousel').carousel('next');
}
