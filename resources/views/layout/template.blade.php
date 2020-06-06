<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assine Live</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-THTPX8Z');</script>
    <!-- End Google Tag Manager -->

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-THTPX8Z"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    @yield('extra-css')
     <div>
         @include('components._navbar')
     </div>
     <div>
         @yield('content')
     </div>
         @include('components._footer')
</body>
<script src="/js/app.js">
    //owl carousel
    $('.owl-carousel').owlCarousel({
        margin:10,
        loop:true,
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
                items:4
            },
            1200:{
                items:5
            }
        }
    });
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129140158-1"></script>

<!-- Code mautic for mouseout show message-->
<script src="//mautic.assinelive.com.br/focus/1.js" type="text/javascript" charset="utf-8" async="async"></script>

<!--chatboot tim live-->
{{--<script type="text/javascript">!function(t,e){"use strict";var r=function(t){try{var r=e.getElementsByTagName("body")[0],
        a=e.createElement("script");a.setAttribute("type","text/javascript"),a.setAttribute("src",t),a.setAttribute("async","true")
        ,a.setAttribute("defer","true"),r.appendChild(a)}catch(t){}};t.TF={chatId:"1410",
        chatUrl:"https://chat.talkform.io/chat/47/a9d8de4243e65bfe86ba3b04d65f57ea015d1e735a03945d241740ebbcc673f8/index.html",
        color:"#3a68a5" },r("https://s3-eu-west-1.amazonaws.com/talkform-eu/integration/talkform.min.js")}(window,document);</script>--}}
@yield("extra-scripts")

</html>
