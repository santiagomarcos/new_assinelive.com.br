$(document).ready(function () {
    //owl carousel
    $('.owl-carousel').owlCarousel({
        margin:10,
        loop:false,
        nav:true,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $('.benefits-box-local').mouseover(function () {
        $('.box-local-space.two').addClass('hover');
    });
    $('.benefits-box-local').mouseout(function () {
        $('.box-local-space.two').removeClass('hover');
    });

    $('.benefits-box-national').mouseover(function () {
        $('.box-national-space.two').addClass('hover');
    });
    $('.benefits-box-national').mouseout(function () {
        $('.box-national-space.two').removeClass('hover');
    });

    $('.benefits-box-international').mouseover(function () {
        $('.box-international-space.two').addClass('hover');
    });
    $('.benefits-box-international').mouseout(function () {
        $('.box-international-space.two').removeClass('hover');
    });


})