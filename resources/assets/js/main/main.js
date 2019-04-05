$(document).ready(function () {
    //owl carousel
    $('.owl-carousel').owlCarousel({
        margin:10,
        loop:false,
        nav:true,
        dots:true,
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
})