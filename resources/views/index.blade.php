@extends('layout.template')

@section('content')
    @include('components._header')
    @include('components._modal_calling')
    <section class="container-carousel">
        <div class="title-call">Confira nossas melhores <span class="title-spotlight">ofertas</span></div>
        <div class="content-carousel">
            <div id="owl_index" class="owl-carousel">
                <div class="items-plan-content">
                    <div class="items-plan-box">
                        <div class="items-plan-header">
                            <span class="focus-offer">
                                <p class="icon-offer-focus">@</p>
                            </span>
                            <span class="limit-time">(Valido para SP e RJ)</span>
                            <div class="desc-plan">
                                <div class="number-plan">60</div>
                                <div class="limit-band">Mega</div>
                            </div>
                        </div>
                        <div class="items-plan-body">
                            <div class="tip-for-usability">
                                <p class="text-tip">Ideal para aproveitar as melhores séries online, musicas e downloads.</p>
                            </div>
                            <ul class="content-items-include">
                                <li class="items-include-plan"><i class="fas fa-tv"></i> +2 canais online</li>
                                <li class="items-include-plan"><i class="fas fa-wifi"></i> Modem de wi-fi</li>
                                <li class="items-include-plan"> <i class="fas fa-arrow-up"></i> Até <strong> 30 MB</strong> de upload</li>
                                <li class="items-include-plan"><i class="fas fa-gamepad"></i> TIM Games & TIM Segurança Digital</li>
                            </ul>
                            <div class="content-price">
                                {{--<div class="begin-in">A partir de:</div>--}}
                                <div class="at-old-price">de <s>R$ 135,00</s>por</div>
                                <div class="box-prices">
                                    <span class="type-money">R$</span>
                                    <span class="value">115</span>
                                    <span class="mounth-and-cents">
                                        <div class="cents">,00</div>
                                        <div class="mounth">/mês</div>
                                    </span>
                                </div>
                                <div class="rate-hability">
                                    <p class="text">Habilitação 12x R$7,00</p>
                                </div>
                            </div>
                            <div class="content-btn-contract">
                                <a href="{{ route('pages.verifications',['plan'=>'PLAN60M']) }}"><button class="btn-contract" >Contratar Agora</button></a>
                            </div>
                        </div>
                        {{--<div class="items-plan-footer">
                            <a href="#">Mais beneficíos v</a>
                        </div>--}}
                    </div>
                </div>
                <div class="items-plan-content">
                    <div class="items-plan-box">
                        <div class="items-plan-header">
                            <span class="focus-offer">
                                <p class="icon-offer-focus">@</p>
                            </span>
                            <span class="limit-time">Por tempo limitado</span>
                            <div class="desc-plan">
                                <div class="number-plan">150</div>
                                <div class="limit-band">Mega</div>
                            </div>
                        </div>
                        <div class="items-plan-body">
                            <div class="tip-for-usability">
                                <p class="text-tip">Ideal para produção de conteúdo digital e downloads mais complexos.</p>
                            </div>
                            <ul class="content-items-include">
                                <li class="items-include-plan"><i class="fas fa-tv"></i> +2 canais online</li>
                                <li class="items-include-plan"><i class="fas fa-wifi"></i> Modem wi-fi</li>
                                <li class="items-include-plan"> <i class="fas fa-arrow-up"></i> Até <strong> 60 MB</strong> de upload</li>
                                <li class="items-include-plan"><i class="fas fa-gamepad"></i> TIM Games & Looke</li>
                            </ul>
                            <div class="content-price">
                                {{--<div class="begin-in">A partir de:</div>--}}
                                <div class="at-old-price">de <s>R$180,00</s>por</div>
                                <div class="box-prices">
                                    <span class="type-money">R$</span>
                                    <span class="value">125</span>
                                    <span class="mounth-and-cents">
                                        <div class="cents">,00</div>
                                        <div class="mounth">/mês</div>
                                    </span>
                                </div>
                                <div class="rate-hability">
                                    <p class="text">Habilitação 12x R$15,00</p>
                                </div>
                            </div>
                            <div class="content-btn-contract">
                                <a href="{{ route('pages.verifications',['plan'=>'PLAN150M']) }}"><button class="btn-contract" >Contratar Agora</button></a>
                            </div>
                        </div>
                        {{--<div class="items-plan-footer">
                            <a href="#">Mais beneficíos v</a>
                        </div>--}}
                    </div>
                </div>
                <div class="items-plan-content">
                    <div class="items-plan-box">
                        <div class="items-plan-header">
                            <span class="focus-offer">
                                <p class="icon-offer-focus">@</p>
                            </span>
                            <span class="limit-time">Por Tempo limitado</span>
                            <div class="desc-plan">
                                <div class="number-plan">200</div>
                                <div class="limit-band">Mega</div>
                            </div>
                        </div>
                        <div class="items-plan-body">
                            <div class="tip-for-usability">
                                <p class="text-tip">GANHE O DOBRO DE VELOCIDADE ASSINANDO COM DÉBITO EM CONTA.</p>
                            </div>
                            <ul class="content-items-include">
                                <li class="items-include-plan"><i class="fas fa-tv"></i> +17 canais online</li>
                                <li class="items-include-plan"><i class="fas fa-wifi"></i> Modem wi-fi</li>
                                <li class="items-include-plan"><i class="fas fa-arrow-up"></i> Até <strong> 80 MB</strong> de upload</li>
                                <li class="items-include-plan"> <i class="fas fa-gamepad"></i> Tim Games </li>
                            </ul>
                            <div class="content-price">
                                <div class="at-old-price">de <s>210,00</s>por</div>
                                <div class="box-prices">
                                    <span class="type-money">R$</span>
                                    <span class="value">150</span>
                                    <span class="mounth-and-cents">
                                        <div class="cents">,00</div>
                                        <div class="mounth">/mês</div>
                                    </span>
                                </div>
                                <div class="rate-hability">
                                    <p class="text">Habilitação 12x R$ 15,00</p>
                                </div>
                            </div>
                            <div class="content-btn-contract">
                                <a href="{{ route('pages.verifications',['plan'=>'PLAN300M']) }}"><button class="btn-contract" >Contratar Agora</button></a>
                            </div>
                        </div>
                        {{--<div class="items-plan-footer">
                            <a href="#">Mais beneficíos v</a>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="digital_services" class="digital-services">
        <div class="content-digital-services">
            <div class="digital-services-header">
                <div class="call-section-digital-services">
                    <div class="title-main">Conheça nossos <strong class="title-spotlight">serviços digitais</strong></div>
                    <p class="description-call">
                        Além da nossa internet fibra de alta qualidade, você cliente TIM também desfruta de alguns dos nosso serviços
                        digitais como canais online e aplicativos exclusivos para você.
                    </p>
                    <span class="line-bottom"></span>
                </div>
            </div>
            <div class="digital-services-body">

                <div class="content-channels">
                    <div class="call-channels">
                        <h2 class="title-channels">Confira a quantidade de canais online que seu plano possui.</h2>
                    </div>
                    <div class="content-show-channels">
                        <div class="monitor-channels">
                            <img src="https://i.imgur.com/aVMNG44.png" alt="">
                        </div>
                        <div class="tablet-channels">
                            <div class="tablet-body">
                                <div class="tablet-title">
                                    Entreterimento pra toda família, futebol ao vivo, filmes, séries e conteúdo infantil.
                                </div>
                                <div class="band-limit-tablet" v-text="plan_tablet">@{{ plan_tablet }}</div>
                                <div class="content-image-channel">
                                    <div class="item-channels" id="cnt_ei1"><img src="https://i.imgur.com/UPQVCmB.png" id="icon-ei-1" alt=""></div>
                                    <div class="item-channels" id="cnt_ei2"><img src="https://i.imgur.com/vjh5FzJ.png" id="icon-ei-2" alt=""></div>
                                    <div class="item-channels" id="cnt_ei3"><img src="https://i.imgur.com/rj9Chaf.png" id="icon-ei-3" alt=""></div>
                                    <div class="item-channels" id="cnt_fox1"><img src="https://i.imgur.com/plRNoMP.png" id="icon-fox-1" alt=""></div>
                                    <div class="item-channels" id="cnt_fox2"><img src="https://i.imgur.com/dclY7MS.png" id="icon-fox-2" alt=""></div>
                                    <div class="item-channels" id="cnt_foxl"><img src="https://i.imgur.com/8Ae9rde.png" id="icon-foxlife"alt=""></div>
                                    <div class="item-channels" id="cnt_baby"><img src="https://i.imgur.com/JGozTsS.png" id="icon-baby" alt=""></div>
                                    <div class="item-channels" id="cnt_kids"><img src="https://i.imgur.com/B3AxKzo.png" id="icon-kids" alt=""></div>
                                    <div class="item-channels" id="cnt_natgeo"><img src="https://i.imgur.com/pW9gg2o.png" id="icon-natgeo" alt=""></div>
                                    <div class="item-channels" id="cnt_wild"><img src="https://i.imgur.com/JXqE3cC.png" id="icon-wild" alt=""></div>
                                    <div class="item-channels" id="cnt_cartoon"><img src="https://i.imgur.com/qdQdlBA.png" id="icon-cartoon" alt=""></div>
                                    <div class="item-channels" id="cnt_fs1"><img src="https://i.imgur.com/2c2HXuv.png" id="icon-fox-sports-1" alt=""></div>
                                    <div class="item-channels" id="cnt_fs2"><img src="https://i.imgur.com/5aKdpkU.png" id="icon-fox-sports-2" alt=""></div>
                                    <div class="item-channels" id="cnt_looke"><img src="https://i.imgur.com/6vorpOT.png" id="icon-looke" alt=""></div>
                                    <div class="item-channels" id="cnt_fx"><img src="https://i.imgur.com/iAMIBym.png" id="icon-fx" alt=""></div>
                                    <div class="item-channels" id="cnt_fox"><img src="https://i.imgur.com/4FHlcUo.png" id="fox-icon" alt=""></div>
                                </div>
                                <div class="content-button">
                                    <a id="ancor_btn_contract" href="{{ route('pages.verifications',['plan'=>'40']) }}"><button class="btn-contact-tablet">Contratar</button></a>
                                </div>
                            </div>
                            <img src="https://i.imgur.com/j9wcPLz.png" alt="">

                        </div>
                        <div class="cellphone-channels">
                            <div class="cellphone-header">
                                Clique nas velocidades para saber os canais disponíveis.
                            </div>
                            <div class="cellphone-body">
                                <button class="btn-band-plan" id="c_60mb" @click="c_60mb">60<br>MB</button>
                                <button class="btn-band-plan" id="c_150mb" @click="c_150mb">150<br>MB</button>
                                <button class="btn-band-plan" id="c_300mb" @click="c_300mb">200<br>MB</button>
                            </div>
                            <img src="https://i.imgur.com/copuma5.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="content-app">
                    <div class="call-app">
                        <h2 class="title-app">Experiemente o que nós trazemos para você cliente TIM</h2>
                    </div>
                    <div class="row-up">
                        <div class="power-wifi">
                            <div class="box-space">
                                <div class="box-title">
                                    <h3 class="title-app">TIM Games Club</h3>
                                </div>
                                <div class="box-description-app">
                                    Tenha acesso a centenas de games premium no seu PC e no Celular.
                                </div>
                                <p class="plan-disponibility">
                                    Disponível em <span class="spotiligh">todos os Planos</span>
                                </p>
                            </div>
                        </div>
                        <div class="tim-learn">
                            <div class="box-space">
                                <div class="box-title">
                                    <h3 class="title-app">Tim ensina</h3>
                                </div>
                                <div class="box-description-app">
                                    Conteúdo educativo para aprender de forma rápida. Uma plataforma
                                    completa, com mais de 40 cursos, divididos em diversas áreas do conhecimento.
                                </div>
                                <p class="plan-disponibility">
                                    Disponível nos planos <span class="spotiligh">500mb, 1gb, 2gb</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row-bottom">
                        <div class="protect">
                            <div class="box-space">
                                <div class="box-title">
                                    <h3 class="title-app">Tim live protect</h3>
                                </div>
                                <div class="box-description-app">
                                    Seus dados protegidos. Aplicativos com 30GB para guardar fotos. Videos e contatos,
                                    sem gastar memória do celular.
                                </div>
                                <p class="plan-disponibility">
                                    Disponível nos planos <span class="spotiligh">60 MEGA</span>
                                </p>
                            </div>
                        </div>
                        <div class="virtual-library">
                            <div class="box-space">
                                <div class="box-title">
                                    <h3 class="title-app">Tim banca virtual</h3>
                                </div>
                                <div class="box-description-app">
                                    Acesse mais de 100 titulos direto do seu Tim. Extra, Folha, Istoé. Veja e muitos
                                    outros sem consumir da sua internet.
                                </div>
                                <p class="plan-disponibility">
                                    Disponível nos planos <span class="spotiligh">40mb, 100mb, 500mb, 1gb, 2gb</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="benefits" class="benefits">
        <div class="content-benefits">
            <div class="benefits-header">
                <div class="call-section-benefits">
                    <div class="title-main">Mais alguns outros <strong class="title-spotlight">produtos</strong> para você</div>
                    <p class="description-call">
                        Ligações DDD regional e longa distância, nacional e internacional, já incluso no seu plano, sem
                        surpresa na sua conta no final do mês.
                    </p>
                    <span class="line-bottom"></span>
                </div>
            </div>

            <div class="benefits-body">
                <div class="benefits-box-local">
                    <div class="box-local-space one">
                        <div class="box-local-header">
                            <span class="icon-phone"><i class="fas fa-phone-volume"></i></span>
                            <span class="icon-arrow"><i class="fas fa-arrow-right"></i></span>
                            <span class="icon-phone-2"><i class="fas fa-phone"></i></span>
                        </div>
                        <div class="box-local-footer">
                            <p class="description-plan-call">Voz ilimitado local</p>
                        </div>
                    </div>
                    <div class="box-local-space two">
                        <div class="box-local-header-hover">
                            Ligações LOCAIS ILIMITADAS para fixo e móvel,
                            on e offnet de qualquer operadora.
                        </div>
                        <div class="box-local-footer-hover">Valor do Plano <span class="text-spotligth">R$ 29,90</span></div>
                    </div>
                </div>

                <div class="benefits-box-national">
                    <div class="box-national-space one">
                        <div class="box-national-header">
                            <span class="icon-phone"><i class="fas fa-phone-volume"></i></span>
                            <span class="icon-arrow"><i class="fas fa-arrow-right"></i></span>
                            <span class="icon-brazil"><img src="https://i.imgur.com/hzYveca.png" alt=""></span>
                        </div>
                        <div class="box-national-footer">
                            <p class="description-plan-call">Voz ilimitado brasil</p>
                        </div>
                    </div>
                    <div class="box-national-space two">
                        <div class="box-national-header-hover">
                            Ligações NACIONAIS ILIMITADAS para fixo e
                            móvel, on e offnet de qualquer operadora.
                        </div>
                        <div class="box-national-footer-hover">Valor do Plano <span class="text-spotligth">R$ 39,90</span></div>
                    </div>
                </div>

                <div class="benefits-box-international">
                    <div class="box-international-space one">
                        <div class="box-international-header">
                            <span class="icon-phone"><i class="fas fa-phone-volume"></i></span>
                            <span class="icon-arrow"><i class="fas fa-arrow-right"></i></span>
                            <span class="icon-word"><i class="fas fa-globe-americas"></i></span>
                        </div>
                        <div class="box-international-footer">
                            <p class="description-plan-call">Voz ilimitado br + ldi</p>
                        </div>
                    </div>
                    <div class="box-international-space two">
                        <div class="box-international-header-hover">
                            Ligações NACIONAIS ILIMITADAS para fixo
                            e móvel, on e offnet de qualquer operadora
                            + 150 minutos exclusivos para ligações LDI.
                        </div>
                        <div class="box-international-footer-hover">Valor do Plano <span class="text-spotligth">R$ 59,90</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="image-parallax">
        <div class="section bg1">
            <div class="caption-box-parallax">
                <p>Faça parte dessa evolução também e aproveite tudo que a nossa
                    <strong class="text-spotligth-parallax">Internet Ultra</strong> tem para te oferecer.</p>
                <a href="{{ route('pages.verifications', ['plan'=>'PLAN60M']) }}"><button class="btn-contract">Eu quero !</button></a>
            </div>

            <div class="caption-parallax">
                <p class="title-spotlight-parallax">Tim live</p>
                <div class="subtitle-spotligth">A evolução da internet.</div>
            </div>
            <div class="box-right-top"></div>
            <div class="box-right-parallax"></div>
        </div>
    </section>
    <div class="speed-test-band">
        <a href="https://www.speedtest.net/pt" target="_blank" class="boxspeed-test">
            <div class="boxspeed-header"><span></span><span class="star"></span></div>
            <div class="boxspeed-body">Faça o teste da velocidade da sua internet <br><span class="target-click">Clique aqui !!</span></div>

            <div class="boxspeed-footer">
                <div class="content-boxspeed">
                    <i class="fas fa-signal"></i>
                    <span class="line-conection"></span>
                    <i class="fas fa-tachometer-alt"></i>
                </div>
            </div>
        </a>
    </div>
    @include('components._navbar-bottom')
@endsection
@section('extra-scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#inputPhone').mask('(00) 00000-0000');
            function modal_caling_validate(){
                if ($("#inputPhone").val() == '' || $("#inputName").val() == ''){
                    return false;
                } else{
                    return true;
                }
            }
            function clearInputs() {
                $("#inputName").val("");
                $("#inputPhone").val("");
            }

            let request_disabled_verify = false;
            $('#sendData').click(function () {
                if (modal_caling_validate()) {

                    var name = $('#inputName').val();
                    var phone = $('#inputPhone').val();

                    if (!request_disabled_verify){
                        axios.post('{{ route('api.calling.send') }}', {
                            name: name,
                            phone: phone,
                        });
                        request_disabled_verify = true;
                        $('.form').hide();
                        $('.message_fail').hide();
                        $('.message_success').show();
                        $('.message_success').html('Informações enviadas com sucesso !!');

                        setTimeout(function() {
                            $('#weCall').modal('hide');
                            $('.form').show();
                            clearInputs();
                            $('.message_success').hide();
                            $('.message_fail').hide();
                            request_disabled_verify = false;
                            $('.message_fail').hide();
                        }, 2000)
                    }
                }else{
                    if ($('#inputName').val() == ''){
                        $('#inputName').focus();
                    } else if ($('#inputPhone').val() == '') {
                        $('#inputPhone').focus();
                    }
                    $('.message_fail').show();
                    $('.message_fail').html('Preencha as informações corretamente');
                }
            });
        });
    </script>

@endsection
