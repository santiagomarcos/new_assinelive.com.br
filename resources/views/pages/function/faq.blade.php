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
                            <div class="items-answers">
                                Na página incial acesse o menu de "serviços digitais" para ser direcionado a área de serviços digitais.
                            </div>
                        </li>

                    </a>
                    <a href="#">
                        <li class="items-questions">
                            <div class="title-items-questions">Como acesso os canais online para assistir a programação ?</div>
                            <div class="items-answers">
                                Através de um cadastro no stie dos canais desejados.
                                <br><br>
                                No caso do "Fox" o endereço é :
                                <strong> www.acessofox.com/timlive </strong>". <br><br>
                                Case seja do "Esporte interativo" o endereço é esse : <strong> www.eiplus.com.br/tim </strong>
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
                    <a href="#">
                        <li class="items-questions">
                            <div class="title-items-questions">Qual o número da Central de Relacionamento TIM Live e seu horário de funcionamento?</div>
                            <div class="items-answers">
                                O número da Central de Relacionamento TIM Live é 10341. Ela funciona 24 horas por dia, 7 dias da semana.
                            </div>
                        </li>
                    </a>
                    <a href="#">
                        <li class="items-questions">
                            <div class="title-items-questions">Quais dados serão necessários ao entrar em contato com a Central de Relacionamento TIM Live?</div>
                            <div class="items-answers">
                                É necessário ter em mãos CPF do titular do contrato TIM Live.
                            </div>
                        </li>
                    </a>
                    <a href="#">
                        <li class="items-questions">
                            <div class="title-items-questions">Como tenho acesso ao contrato e regulamento da minha TIM Live?</div>
                            <div class="items-answers">
                                Todos os contratos e regulamentos encontram-se no site TIM Live. Clique em
                                “Regulamentos e Contratos” para visualizar o documento desejado
                            </div>
                        </li>
                    </a>
                    <a href="#">
                        <li class="items-questions">
                            <div class="title-items-questions">Como posso saber quanto eu usei da internet?</div>
                            <div class="items-answers">
                                Você não precisará saber o quanto você usou da internet! Os Planos TIM Live foram criados para você utilizar a
                                Internet sem se preocupar com o seu tempo de conexão. Os planos TIM Live não possuem franquia e por isso,
                                o seu uso é ilimitado!
                            </div>
                        </li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
@endsection