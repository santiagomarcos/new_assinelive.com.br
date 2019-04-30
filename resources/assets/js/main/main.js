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

    function hide_channels() {
        $('#cnt_ei1').hide();
        $('#cnt_ei2').hide();
        $('#cnt_ei3').hide();
        $('#cnt_baby').hide();
        $('#cnt_kids').hide();
        $('#cnt_cartoon').hide();
        $('#cnt_fox').hide();
        $('#cnt_foxl').hide();
        $('#cnt_fox1').hide();
        $('#cnt_fox2').hide();
        $('#cnt_fx').hide();
        $('#cnt_fs1').hide();
        $('#cnt_fs2').hide();
        $('#cnt_wild').hide();
        $('#cnt_natgeo').hide();
        $('#cnt_looke').hide();
    }
    function show_channels($plan) {
        if ($plan == '40<br>MB'){
            hide_channels();
            $('#cnt_ei1').show();
        }else if ($plan == '60<br>MB'){
            hide_channels();
            $('#cnt_ei1').show();
            $('#cnt_ei2').show();
            $('#cnt_ei3').show();
            $('#cnt_fx').show();
            $('#cnt_foxl').show();
            $('#cnt_fs1').show();
            $('#cnt_fs2').show();
            $('#cnt_fox').show();
            $('#cnt_baby').show();
            $('#cnt_kids').show();
            $('#cnt_wild').show();
            $('#cnt_natgeo').show();

        }else if ($plan == '100<br>MB'){
            hide_channels();
            $('#cnt_ei1').show();
            $('#cnt_ei2').show();
            $('#cnt_ei3').show();
            $('#cnt_cartoon').show();

        }else if ($plan == '150<br>MB'){
            hide_channels();
            $('#cnt_ei1').show();
            $('#cnt_ei2').show();
            $('#cnt_ei3').show();
            $('#cnt_fx').show();
            $('#cnt_foxl').show();
            $('#cnt_fs1').show();
            $('#cnt_fs2').show();
            $('#cnt_fox1').show();
            $('#cnt_fox2').show();
            $('#cnt_fox').show();
            $('#cnt_baby').show();
            $('#cnt_kids').show();
            $('#cnt_wild').show();
            $('#cnt_natgeo').show();
            $('#cnt_cartoon').show();

        }else if ($plan == '300<br>MB'){
            hide_channels();
            $('#cnt_ei1').show();
            $('#cnt_ei2').show();
            $('#cnt_ei3').show();
            $('#cnt_fx').show();
            $('#cnt_foxl').show();
            $('#cnt_fs1').show();
            $('#cnt_fs2').show();
            $('#cnt_fox1').show();
            $('#cnt_fox2').show();
            $('#cnt_fox').show();
            $('#cnt_baby').show();
            $('#cnt_kids').show();
            $('#cnt_wild').show();
            $('#cnt_natgeo').show();
            $('#cnt_cartoon').show();

        }else if ($plan == '500<br>MB'){
            hide_channels();
            $('#cnt_ei1').show();
            $('#cnt_ei2').show();
            $('#cnt_ei3').show();
            $('#cnt_fx').show();
            $('#cnt_foxl').show();
            $('#cnt_fs1').show();
            $('#cnt_fs2').show();
            $('#cnt_fox1').show();
            $('#cnt_fox2').show();
            $('#cnt_fox').show();
            $('#cnt_baby').show();
            $('#cnt_kids').show();
            $('#cnt_wild').show();
            $('#cnt_natgeo').show();
            $('#cnt_cartoon').show();

        }else if ($plan == '1<br>GB'){
            hide_channels();
            $('#cnt_ei1').show();
            $('#cnt_ei2').show();
            $('#cnt_ei3').show();
            $('#cnt_fx').show();
            $('#cnt_foxl').show();
            $('#cnt_fs1').show();
            $('#cnt_fs2').show();
            $('#cnt_fox1').show();
            $('#cnt_fox2').show();
            $('#cnt_fox').show();
            $('#cnt_baby').show();
            $('#cnt_kids').show();
            $('#cnt_wild').show();
            $('#cnt_natgeo').show();
            $('#cnt_cartoon').show();
            $('#cnt_looke').show();

        }else if ($plan == '2<br>GB'){
            hide_channels();
            $('#cnt_ei1').show();
            $('#cnt_ei2').show();
            $('#cnt_ei3').show();
            $('#cnt_fx').show();
            $('#cnt_foxl').show();
            $('#cnt_fs1').show();
            $('#cnt_fs2').show();
            $('#cnt_fox1').show();
            $('#cnt_fox2').show();
            $('#cnt_fox').show();
            $('#cnt_baby').show();
            $('#cnt_kids').show();
            $('#cnt_wild').show();
            $('#cnt_natgeo').show();
            $('#cnt_cartoon').show();
            $('#cnt_looke').show();
        }
    }
    function validate_inputs (){
        if ($('#l-name').val() == '' ||
            $('#l-email').val() == '' ||
            $('#telephone').val() =='' ||
            $('#zip-code').val() == '' ||
            $('#number-home').val() === ""){
            $('#btnVerification').prop('disabled',true);
        }else{
            $('#btnVerification').prop('disabled',false);
        }
    }

    $('#c_40mb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/PLAN40M');
    })
    $('#c_60mb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/PLAN60M');
    })
    $('#c_100mb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/PLAN100M');
    })
    $('#c_150mb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/PLAN150M');
    })
    $('#c_300mb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/PLAN300M');
    })
    $('#c_500mb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/PLAN500M');
    })
    $('#c_1gb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/PLAN1G');
    })
    $('#c_2gb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/PLAN2G');
    })

    $('.btn-toggle').on('click',function () {
        $('.menu-responsive-content').toggleClass('active');
    })
    $('#btn-close').on('click',function () {
        $('.menu-responsive-content').toggleClass('active');
    })

    //efeito scroll menu items
    $('.content-menu a[href^="#"]').on('click',
        function(e) {
            e.preventDefault();
            var id = $(this).attr('href'), targetOffset = $(id).offset().top;

            $('html, body').animate({
                scrollTop: targetOffset  -10
            }, 750);
        });

    //efeito scroll menu reponsive
    $('.content-limit-brand h3[id^="cn"]').on('click',
        function(e) {
            e.preventDefault();
            var id = $('#cic'), targetOffset = $(id).offset().top;

            $('html, body').animate({
                scrollTop: targetOffset  -150
            }, 750);
        });

    $('.content-menu-responsive a[href^="#"]').on('click',
        function(e) {
            $('.menu-responsive-content').toggleClass('active');
            e.preventDefault();
            var id = $(this).attr('href'), targetOffset = $(id).offset().top;

            $('html, body').animate({
                scrollTop: targetOffset  -80
            }, 750);
        });

    $(document).scroll(function () {
        if ($(this).scrollTop()>120){
            $('.content-navbar-bottom').addClass('up');
        } else{
            $('.content-navbar-bottom').removeClass('up');
        }
    })

    $('#btn-up').on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 750);
    })

    $('#btnVerification').on('click',function () {

    })



})