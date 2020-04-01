<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assine Live - Administração</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
          integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-97612743-5"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-97612743-5');
    </script>

    <style>

        body {
            overflow-x: hidden;
        }

        .image-bg {
            width: 75%;
            height: 100vh;
            float: left;


        }

        .form-login {
            width: 25%;
            height: 100vh;
            background: #fff;
            float: right;
            padding: 10px;
            /*box-shadow: inset 0px 0px 20px #292735;*/
            overflow-y: auto;
            overflow-x: hidden;
        }
        .brand-firstname {
            padding-left: 20px;
            text-transform: uppercase;
            text-shadow: 3px 1px 4px #000;
            font-size: 35px;
            color: #fff; }
        @media (max-width: 767px) {
            a .brand-firstname {
                font-size: 25px; } }
        @media (max-width: 474px) {
             a .brand-firstname {
                font-size: 20px; } }
        a .brand-secondname {
            margin-left: 90px;
            color: #1390d4;
            text-transform: uppercase;
            font-size: 18px; }
        @media (max-width: 767px) {
            .brand-secondname {
                font-size: 14px;
                font-weight: normal;
                margin-left: 65px; } }
        @media (max-width: 474px) {
           .brand-secondname {
                font-size: 12px;
                margin-left: 50px; } }

        .form-content {

        }

        .logo {
            text-align: center;
            padding: 50px 30px;
        }

        input{
            padding: 20px 10px !important;
        }

        .lg_emp{
            -webkit-border-radius: 4px 4px 0px 0px;
            -moz-border-radius: 4px 4px 0px 0px;
            border-radius: 4px 4px 0px 0px;
        }

        .pass{
            -webkit-border-radius: 0px 0px 4px 4px;
            -moz-border-radius: 0px 0px 4px 4px;
            border-radius: 0px 0px 4px 4px;
        }

        @media only screen and (max-width:991px) {
            .image-bg{
                width: 70%;
            }

            .form-login{
                width: 30%;
            }

        }

        @media only screen and (max-width:767px) {
            .image-bg{
                width: 60%;
            }

            .form-login{
                width: 40%;
            }

        }

        @media only screen and (max-width:474px) {
            body{
                padding: 15px;
                margin: auto;

                background: url("https://i.imgur.com/d6aIHYk.jpg");
            }
            .image-bg{
                display: none;
            }

            .form-login{
                width: 100%;
                height: auto;
            }

        }


    </style>
</head>
<body>
<div class="content">
    <div class="image-bg">
    </div>
    <div class="form-login">
        <div class="">
            @if(Session::has('approved'))
                <div class="alert alert-success alert-dismissible text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fab fa-angellist"></i></h4>
                    <b> {{ Session::get('approved') }} </b>
                </div>
            @endif
            @if(Session::has('error'))
                <div class="alert alert-danger alert- text-center">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fas fa-exclamation-triangle"></i></h4>
                    {{ Session::get('error') }}
                </div>
            @endif
        </div>
        <div class="logo">
            <a href="http://localhost:8000" class="brand">
                <p class="brand-firstname"><b>A</b>ssine live</p>
                <p class="brand-secondname">Administração</p>
            </a>
        </div>
        <div class="form-content" style="margin-left: 0px; margin-right: 0px;">

            <form action="{{ route('admin.auth.authenticate') }}" method="POST" class="form-horizontal">
                <!-- <div class="form-group">
                     <label for="login-empresa" class="col-sm-12">Login Empresa</label>

                     <div class="">
                         <div class="col-sm-12">
                             <input type="text" placeholder="Digite o Login da Empresa" name="n" id="empresa"
                                    class="form-control lg_emp">
                         </div>
                     </div>
                 </div>-->
                <div class="form-group">
                    <label for="login-pessoa" class="col-sm-12">Usuário</label>
                    <div class="">
                        <div class="col-sm-12">
                            <input type="text" placeholder="Digite o usuário" name="username" id="usuario" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="senha" class="col-sm-12">Senha</label>
                    <div class="">
                        <div class="col-sm-12">

                            <input type="password" placeholder="********" id="senha" name="password" class="form-control pass">
                        </div>
                    </div>
                </div>
                <span class="help-block"
                      style="font-size: 11px; font-style: italic;">
                        Existe a diferenciação entre letras <b>maiúsculas e minúsculas</b> na definição de <b>senhas</b>.

                </span>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block col-sm-12">Entrar</button>
                        <!-- <button type="button" class="btn btn-default col-sm-11 col-sm-offset-1">Cancelar</button>-->
                    </div>
                </div>

                <div class="link-block text-center">
                    Desenvolvido por<b><a href="https://www.ffxsistemas.com"> FFX Sistemas</a></b>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

    $(document).ready(function(){
        var banner = $('.image-bg'), x = 1 + Math.floor(Math.random() * 6);
        if (x == 1) {
            banner.css({
                background:'url(https://i.imgur.com/2RIdqMm.jpg)',
                backgroundAttachment:'fixed',
                backgroundSize:'cover'

            });
        }
        else if (x == 2) {
            banner.css({
                background:'url(https://i.imgur.com/iIc4JnF.jpg)',
                backgroundAttachment:'fixed',
                backgroundSize:'cover'

            });
        }
        else if (x == 3) {
            banner.css({
                background:'url(https://i.imgur.com/bohlDbm.jpg)',
                backgroundAttachment:'fixed',
                backgroundSize:'cover'

            });
        }
        else if (x == 4) {
            banner.css({
                background:'url(https://i.imgur.com/9S1ZB6I.jpg)',
                backgroundAttachment:'fixed',
                backgroundSize:'cover'

            });
        }
        else if (x == 5) {
            banner.css({
                background:'url(https://i.imgur.com/d6aIHYk.jpg)',
                backgroundAttachment:'fixed',
                backgroundSize:'cover',
                backgroundPosition:'0px -30px'

            });
        }
        else if (x == 6) {
            banner.css({
                background:'url(https://i.imgur.com/77fSrMh.jpg)',
                backgroundAttachment:'fixed',
                backgroundSize:'cover',
                backgroundPosition:'0px -30px'
            });
        }
    });
</script>
</html>
