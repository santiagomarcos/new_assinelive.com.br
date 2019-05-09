@extends('layout.template')

@section('extra-css')
    <style>
        .content-footer .container-footer .box-left {
            display: none;
        }

        .content-footer .container-footer .box-rigth {
            float: none;
            left: auto;
            width: auto;
            text-align: center;
            height: auto;
        }

        .content-navbar .header-navbar .content-menu, .box-button {
            display: none;
        }

        .content-navbar .header-navbar .box-number {
            float: right;
        }

        .content-navbar .header-navbar .box-number {
            right: 0px;
        }

        @media (max-width: 992px) {
            .content-navbar .header-navbar .box-number {
                left: 0px;
            }
        }
    </style>
@endsection

@section('content')
    @include('components._modal_calling')
    <div class="main_faq">
        <div class="content-faq">
            <h1 class="title-faq">Perguntas frequentes</h1>
            <div class="content-questions">
                <ul class="container-items-questions">
                    <a href="#">
                        <li class="items-questions">
                            <div class="title-items-questions">Como saber os canais do meu plano ?</div>
                            <div class="items-answers">Acesse a area de "serviços digitais" do nosso site pelo menu</div>
                        </li>

                    </a>
                    <a href="#"><li class="items-questions">
                            <div class="title-items-questions">Como acesso os canais on line para assistir a programação ?</div>
                            <div class="items-answers">
                                Através de um cadastro no stie dos canais desejados, no caso do "Fox" o endereço é :
                                www.foxchannel.com.br/tim e escolher a opção "usuário tim".
                            </div>
                        </li>
                    </a>
                    <a href="#">
                        <li class="items-questions">
                            <div class="title-items-questions">Já tenho um número de telefone e quero manter o mesmo ?</div>
                            <div class="items-answers">
                                Escolha a opção de portabilidade no momento de "cadastro de dados pessoais" após a verificação
                                de viabilidade.
                            </div>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
@endsection