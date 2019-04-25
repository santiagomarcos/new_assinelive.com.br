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

    $('#c_40mb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/40');
    })
    $('#c_60mb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/60');
    })
    $('#c_100mb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/100');
    })
    $('#c_150mb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/150');
    })
    $('#c_300mb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/300');
    })
    $('#c_500mb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/500');
    })
    $('#c_1gb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/1');
    })
    $('#c_2gb').on('click',function () {
        show_channels($(this).html());
        $('#ancor_btn_contract').prop('href', '/pages/verifications/2');
    })
})