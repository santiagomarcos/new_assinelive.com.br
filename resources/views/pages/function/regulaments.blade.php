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
    <section class="services_regulaments">
        <div class="container-services">
            <h2 class="title-services">Regulamentos e contratos</h2>

            <div class="services-box">
                <p class="title-box-services">TIM Móvel</p>
                <ul>
                    <li class="items-services">
                        <a target="_blank" href="https://www.tim.com.br/Portal_Conteudo/_staticfiles/pdf/contratoSPMconsumer.pdf">Contrato de Prestação de Serviço Móvel Pessoal-SMP</a>
                    </li>
                    <li class="items-services">
                        <a target="_blank" href="https://www.tim.com.br/Portal_Conteudo/_staticfiles/pdf/Contrato%20SMP_POS.pdf">Contrato de Prestação de Serviço Móvel Pessoal Pós Pago</a>
                    </li>
                    <li class="items-services">
                        <a target="_blank" href="https://www.tim.com.br/Portal_Conteudo/_staticfiles/para-voce/planos/Controle/pdf/Regulamento-TIM-Controle-Express-B.pdf">Regulamento TIM Controle Express B</a>
                    </li>
                    <li class="items-services">
                        <a target="_blank" href="https://cdn.celulardireto.com.br/TIM/estaticos/regulamentos/pos/CONTRATO_DE_PERMANENCIA_SERVICO_VF_Digital_e_CRC.pdf?_ga=2.64926762.425684635.1525961382-502266882.1525961382">Contrato de Permanência de Serviço</a>
                    </li>
                </ul>
            </div>

            <div class="services-box">
                <p class="title-box-services">TIM Fixo</p>
                <ul>
                    <li class="items-services">
                        <a target="_blank" href="https://www.tim.com.br/Portal_Conteudo/_staticfiles/para-voce/planos/fixo/tim-fixo-pos/Contrato%20STCF%20Local%20-%20TIM%20FIXO%20RESIDENCIAL%20%20VF%2024%202%202015.pdf">Contrato de prestação de serviço telefônico fixo comutado na modalidade local</a>
                    </li>
                    <li class="items-services">
                        <a target="_blank" href="https://www.tim.com.br/Portal_Conteudo/_staticfiles/para-voce/planos/fixo/tim-fixo-pos/pdf/Regulamento_FIXO_TOTAL_LDI_PLUS.pdf">Regulamento TIM Fixo Total LDI Plus</a>
                    </li>
                    <li class="items-services">
                        <a target="_blank" href="https://www.tim.com.br/Portal_Conteudo/_staticfiles/para-voce/planos/fixo/tim-fixo-pos/pdf/Regulamento_FIXO_BRASIL_TOTAL_PLUS.pdf">Regulamento TIM Fixo Brasil Total Plus</a>
                    </li>
                    <li class="items-services">
                        <a target="_blank" href="https://www.tim.com.br/Portal_Conteudo/_staticfiles/para-voce/planos/fixo/tim-fixo-pos/pdf/Regulamento_FIXO_LOCAL_TOTAL_PLUS.pdf">Regulamento TIM Fixo Local Total Plus</a>
                    </li>
                </ul>
            </div>

            <div class="services-box">
                <p class="title-box-services">TIM Fixo</p>
                <ul>
                    <li class="items-services">
                        <a target="_blank" href="https://www.tim.com.br/Portal_Conteudo/_staticfiles/dpmFiles/pdf/Contrato%20de%20Presta%C3%A7%C3%A3o%20de%20Servi%C3%A7os%20Live%20TIM.pdf">Contrato de prestação de serviços TIM Live</a>
                    </li>
                    <li class="items-services">
                        <a target="_blank" href="https://www.tim.com.br/Portal_Conteudo/_staticfiles/dpmFiles/pdf/regulamento-tim-live.pdf">Regulamento TIM Live</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection
