/*CAROUSEL*/
$(document).ready(function(){
    $('.carousel').carousel({
        dist:0, shift:0, padding:20
    });
});
$('.carousel.carousel-slider').carousel({fullWidth: true});

/*PARALLAX*/
$(document).ready(function(){
    $('.parallax').parallax();
});

/*MODAL*/
$(document).ready(function(){
    $('.modal').modal();
});

/*SELECT*/
$(document).ready(function() {
    $('select').material_select();
});

/*SLIDER*/
$(document).ready(function(){
    $('.slider').slider();
});

/*SCROLLTOP*/
$('body').materialScrollTop();
