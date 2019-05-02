@extends('layout.template')

@section('content')
    @include('components._header')
    @include('components._modal_calling')
    <section class="container-carousel">
        <div class="title-call">Confira nossas melhores <span class="title-spotlight">ofertas</span></div>
        <div class="content-carousel">
            <div class="owl-carousel">
                <div class="items-plan-content">
                    <div class="items-plan-box">
                        <div class="items-plan-header">
                            <span class="normal-offer"></span>
                            <div class="desc-plan">
                                <div class="number-plan">40</div>
                                <div class="limit-band">Mega</div>
                            </div>
                        </div>
                        <div class="items-plan-body">
                            <div class="tip-for-usability">
                                <p class="text-tip">Ideal para redes sociais, pesquisa de estudos e diversos sites.</p>
                            </div>
                            <ul class="content-items-include">
                                <li class="items-include-plan"><i class="fas fa-tv"></i> +1 canais online</li>
                                <li class="items-include-plan">Modem de wi-fi</li>
                                <li class="items-include-plan"><i class="fas fa-arrow-up"></i><strong> 20 MB</strong> de upload</li>
                                <li class="items-include-plan"> <i class="fas fa-phone-volume"></i> voz fixa ilimitada local</li>
                            </ul>
                            <div class="content-price">
                                <div class="begin-in">A partir de:</div>
                                <div class="box-prices">
                                    <span class="type-money">R$</span>
                                    <span class="value">96</span>
                                    <span class="mounth-and-cents">
                                        <div class="cents">,60</div>
                                        <div class="mounth">/mês</div>
                                    </span>
                                </div>
                                <div class="rate-hability">
                                    <p class="text">Habilitação 12x R$5,00</p>
                                </div>
                            </div>
                            <div class="content-btn-contract">
                                <a href="{{ route('pages.verifications',['plan'=>'PLAN40M']) }}"><button class="btn-contract" >Contratar</button></a>
                            </div>
                        </div>
                        {{--<div class="items-plan-footer">--}}
                            {{--<a href="#">Mais beneficíos v</a>--}}
                        {{--</div>--}}
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
                                <div class="number-plan">60</div>
                                <div class="limit-band">Mega</div>
                            </div>
                        </div>
                        <div class="items-plan-body">
                            <div class="tip-for-usability">
                                <p class="text-tip">Ideal para aproveitar as melhores séries online, musicas e downloads.</p>
                            </div>
                            <ul class="content-items-include">
                                <li class="items-include-plan"><i class="fas fa-tv"></i> +12 canais online</li>
                                <li class="items-include-plan">Modem de wi-fi</li>
                                <li class="items-include-plan"><i class="fas fa-arrow-up"></i><strong> 30 MB</strong> de upload</li>
                                <li class="items-include-plan"><i class="fas fa-phone-volume"></i> voz fixa ilimitada local</li>
                            </ul>
                            <div class="content-price">
                                {{--<div class="begin-in">A partir de:</div>--}}
                                <div class="at-old-price">de <s>R$115,00</s>por</div>
                                <div class="box-prices">
                                    <span class="type-money">R$</span>
                                    <span class="value">103</span>
                                    <span class="mounth-and-cents">
                                        <div class="cents">,50</div>
                                        <div class="mounth">/mês</div>
                                    </span>
                                </div>
                                <div class="rate-hability">
                                    <p class="text">Habilitação 12x R$5,00</p>
                                </div>
                            </div>
                            <div class="content-btn-contract">
                                <a href="{{ route('pages.verifications',['plan'=>'PLAN60M']) }}"><button class="btn-contract" >Contratar</button></a>
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
                                <div class="number-plan">100</div>
                                <div class="limit-band">Mega</div>
                            </div>
                        </div>
                        <div class="items-plan-body">
                            <div class="tip-for-usability">
                                <p class="text-tip">Ideal para jogar online, streamings e outros tipos de midias digitais.</p>
                            </div>
                            <ul class="content-items-include">
                                <li class="items-include-plan"><i class="fas fa-tv"></i> +2 canais online</li>
                                <li class="items-include-plan">Modem de wi-fi</li>
                                <li class="items-include-plan"> <i class="fas fa-arrow-up"></i> 60 MB</strong> de upload</li>
                                <li class="items-include-plan"><i class="fas fa-phone-volume"></i> voz fixa ilimitada local</li>
                            </ul>
                            <div class="content-price">
                                {{--<div class="begin-in">A partir de:</div>--}}
                                <div class="at-old-price">de <s>R$130,00</s>por</div>
                                <div class="box-prices">
                                    <span class="type-money">R$</span>
                                    <span class="value">97</span>
                                    <span class="mounth-and-cents">
                                        <div class="cents">,50</div>
                                        <div class="mounth">/mês</div>
                                    </span>
                                </div>
                                <div class="rate-hability">
                                    <p class="text">Habilitação 12x R$10,00</p>
                                </div>
                            </div>
                            <div class="content-btn-contract">
                                <a href="{{ route('pages.verifications',['plan'=>'PLAN100M']) }}"><button class="btn-contract" >Contratar</button></a>
                            </div>
                        </div>
                       {{-- <div class="items-plan-footer">
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
                                <li class="items-include-plan"><i class="fas fa-tv"></i> +13 canais online</li>
                                <li class="items-include-plan">Modem de wi-fi</li>
                                <li class="items-include-plan"> <i class="fas fa-arrow-up"></i> 60 MB</strong> de upload</li>
                                <li class="items-include-plan"><i class="fas fa-phone-volume"></i> voz fixa ilimitada Brasil</li>
                            </ul>
                            <div class="content-price">
                                {{--<div class="begin-in">A partir de:</div>--}}
                                <div class="at-old-price">de <s>R$160,00</s>por</div>
                                <div class="box-prices">
                                    <span class="type-money">R$</span>
                                    <span class="value">120</span>
                                    <span class="mounth-and-cents">
                                        <div class="cents">,00</div>
                                        <div class="mounth">/mês</div>
                                    </span>
                                </div>
                                <div class="rate-hability">
                                    <p class="text">Habilitação 12x R$10,00</p>
                                </div>
                            </div>
                            <div class="content-btn-contract">
                                <a href="{{ route('pages.verifications',['plan'=>'PLAN150M']) }}"><button class="btn-contract" >Contratar</button></a>
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
                            <span class="normal-offer"></span>
                            <div class="desc-plan">
                                <div class="number-plan">300</div>
                                <div class="limit-band">Mega</div>
                            </div>
                        </div>
                        <div class="items-plan-body">
                            <div class="tip-for-usability">
                                <p class="text-tip">Ideal para locais com alto número de dispositívos conectados com multi acessos.</p>
                            </div>
                            <ul class="content-items-include">
                                <li class="items-include-plan"><i class="fas fa-tv"></i> +13 canais online</li>
                                <li class="items-include-plan">Modem + Power wi-fi</li>
                                <li class="items-include-plan"><i class="fas fa-arrow-up"></i><strong> 180 MB</strong> de upload</li>
                                <li class="items-include-plan"> <i class="fas fa-phone-volume"></i> voz fixa ilimitada Brasil</li>
                            </ul>
                            <div class="content-price">
                                <div class="at-old-price">de <s>R$240,00</s>por</div>
                                <div class="box-prices">
                                    <span class="type-money">R$</span>
                                    <span class="value">180</span>
                                    <span class="mounth-and-cents">
                                        <div class="cents">,00</div>
                                        <div class="mounth">/mês</div>
                                    </span>
                                </div>
                                <div class="rate-hability">
                                    <p class="text">Habilitação 12x R$30,00</p>
                                </div>
                            </div>
                            <div class="content-btn-contract">
                                <a href="{{ route('pages.verifications',['plan'=>'PLAN300M']) }}"><button class="btn-contract" >Contratar</button></a>
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
                            <span class="normal-offer"></span>
                            <div class="desc-plan">
                                <div class="number-plan">500</div>
                                <div class="limit-band">Mega</div>
                            </div>
                        </div>
                        <div class="items-plan-body">
                            <div class="tip-for-usability">
                                <p class="text-tip">Ideal para locais com alto acesso a internet, tráfego de informações e dados.</p>
                            </div>
                            <ul class="content-items-include">
                                <li class="items-include-plan"><i class="fas fa-tv"></i> +13 canais online</li>
                                <li class="items-include-plan">Modem + Power wi-fi</li>
                                <li class="items-include-plan"><i class="fas fa-arrow-up"></i><strong> 250 MB</strong> de upload</li>
                                <li class="items-include-plan"> <i class="fas fa-phone-volume"></i> voz fixa ilimitada Brasil</li>
                            </ul>
                            <div class="content-price">
                                <div class="at-old-price">por apenas</div>
                                <div class="box-prices">
                                    <span class="type-money">R$</span>
                                    <span class="value">450</span>
                                    <span class="mounth-and-cents">
                                        <div class="cents">,00</div>
                                        <div class="mounth">/mês</div>
                                    </span>
                                </div>
                                <div class="rate-hability">
                                    <p class="text">Habilitação 12x R$30,00</p>
                                </div>
                            </div>
                            <div class="content-btn-contract">
                                <a href="{{ route('pages.verifications',['plan'=>'PLAN500M']) }}"><button class="btn-contract" >Contratar</button></a>
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
                            <span class="normal-offer"></span>
                            <div class="desc-plan">
                                <div class="number-plan">1</div>
                                <div class="limit-band">Giga</div>
                            </div>
                        </div>
                        <div class="items-plan-body">
                            <div class="tip-for-usability">
                                <p class="text-tip">Ideal para startups de têcnologia, marketing e uma infinidade de utilidades.</p>
                            </div>
                            <ul class="content-items-include">
                                <li class="items-include-plan"><i class="fas fa-tv"></i> +13 canais online</li>
                                <li class="items-include-plan">Modem + Power wi-fi</li>
                                <li class="items-include-plan"><i class="fas fa-arrow-up"></i><strong> 300 MB</strong> de upload</li>
                                <li class="items-include-plan"> <i class="fas fa-phone-volume"></i> voz fixa ilimitada Brasil + LDI</li>
                            </ul>
                            <div class="content-price">
                                <div class="at-old-price">por apenas</div>
                                <div class="box-prices">
                                    <span class="type-money">R$</span>
                                    <span class="value">860</span>
                                    <span class="mounth-and-cents">
                                        <div class="cents">,00</div>
                                        <div class="mounth">/mês</div>
                                    </span>
                                </div>
                                <div class="rate-hability">
                                    <p class="text">Habilitação 12x R$50,00</p>
                                </div>
                            </div>
                            <div class="content-btn-contract">
                                <a href="{{ route('pages.verifications',['plan'=>'PLAN1G']) }}"><button class="btn-contract" >Contratar</button></a>
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
                            <span class="normal-offer"></span>
                            <div class="desc-plan">
                                <div class="number-plan">2</div>
                                <div class="limit-band">Giga</div>
                            </div>
                        </div>
                        <div class="items-plan-body">
                            <div class="tip-for-usability">
                                <p class="text-tip">Ideal para empresas com servidores internos  e uso complexo da internet. </p>
                            </div>
                            <ul class="content-items-include">
                                <li class="items-include-plan"><i class="fas fa-tv"></i> +13 canais online</li>
                                <li class="items-include-plan">Modem + Power wi-fi</li>
                                <li class="items-include-plan"><i class="fas fa-arrow-up"></i><strong> 500 MB</strong> de upload</li>
                                <li class="items-include-plan"> <i class="fas fa-phone-volume"></i> voz fixa ilimitada Brasil + LDI</li>
                            </ul>
                            <div class="content-price">
                                <div class="at-old-price">por apenas</div>
                                <div class="box-prices">
                                    <span class="type-money">R$</span>
                                    <span class="value">1560</span>
                                    <span class="mounth-and-cents">
                                        <div class="cents">,00</div>
                                        <div class="mounth">/mês</div>
                                    </span>
                                </div>
                                <div class="rate-hability">
                                    <p class="text">Habilitação 12x R$50,00</p>
                                </div>
                            </div>
                            <div class="content-btn-contract">
                                <a href="{{ route('pages.verifications',['plan'=>'PLAN2G']) }}"><button class="btn-contract" >Contratar</button></a>
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
                        Ligações DDD regional e longa distância, nacional e internacional, já incluso no seu plano, sem
                        surpresa na sua conta no final do mês.
                    </p>
                    <span class="line-bottom"></span>
                </div>
            </div>
            <div class="digital-services-body">

                <div class="content-channels">
                    <div class="call-channels">
                        <h2 class="title-channels">Confira a quantidade de canias online que seu plano possui.</h2>
                    </div>
                    <div class="content-show-channels">
                        <div class="monitor-channels">
                            <img src="https://i.imgur.com/aVMNG44.png" alt="">
                        </div>
                        <div class="tablet-channels">
                            <div class="tablet-body">
                                <div class="tablet-title">
                                    Entreterimento pra toda família, futebol ao vivo, filmes, séries e conteudo infantil.
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
                                Clique nas velocidades para saber os canais disponiveís.
                            </div>
                            <div class="cellphone-body">
                                <button class="btn-band-plan" id="c_40mb" @click="c_40mb">40<br>MB</button>
                                <button class="btn-band-plan" id="c_60mb" @click="c_60mb">60<br>MB</button>
                                <button class="btn-band-plan" id="c_100mb" @click="c_100mb">100<br>MB</button>
                                <button class="btn-band-plan" id="c_150mb" @click="c_150mb">150<br>MB</button>
                                <button class="btn-band-plan" id="c_300mb" @click="c_300mb">300<br>MB</button>
                                <button class="btn-band-plan" id="c_500mb" @click="c_500mb">500<br>MB</button>
                                <button class="btn-band-plan" id="c_1gb" @click="c_1gb">1 <br>GB</button>
                                <button class="btn-band-plan" id="c_2gb" @click="c_2gb">2 <br>GB</button>
                            </div>
                            <img src="https://i.imgur.com/copuma5.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="content-app">
                    <div class="call-app">
                        <h2 class="title-app">Experiemnte o que nós trazemos para você cliente TIM</h2>
                    </div>
                    <div class="row-up">
                        <div class="power-wifi">
                            <div class="box-space">
                                <div class="box-title">
                                    <h3 class="title-app">Tim power wi-fi</h3>
                                </div>
                                <div class="box-description-app">
                                    Com o nosso amplificador de sinal a sua internet via wi-fi não sofrerá
                                    nenhuma perca ao navegador com dispositivos móveis.
                                </div>
                                <p class="plan-disponibility">
                                    Disponivel nos planos <span class="spotiligh">300mb, 500mb, 1gb, 2gb</span>
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
                                    Disponivel nos planos <span class="spotiligh">500mb, 1gb, 2gb</span>
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
                                    Disponivel em <span class="spotiligh">Todos os planos</span>
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
                                    Disponivel nos planos <span class="spotiligh">40mb, 100mb, 500mb, 1gb, 2gb</span>
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
                    <div class="title-main">Mais alguns outros <strong class="title-spotlight">benefícios</strong> para você</div>
                    <p class="description-call">
                        Além da nossa internet fibra de alta qualidade, você cliente TIM também desfruta de alguns dos nosso serviços
                        digitais como canais online e aplicativos exclusivos para você.
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
                        <div class="box-local-footer-hover">Disponivel nos planos <span class="text-spotligth">40, 60 e 100 mega</span></div>
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
                        <div class="box-national-footer-hover">Disponivel nos planos <span class="text-spotligth">150, 300 e 500 mega</span></div>
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
                        <div class="box-international-footer-hover">Disponivel nos planos <span class="text-spotligth">1 e 2 giga</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="image-parallax">
        <div class="section bg1">
            <div class="caption-box-parallax">
                <p>Faça parte dessa evolução também e aproveite tudo que a nossa
                    <strong>Internet Ultra</strong> tem pra te oferecer.</p>
                <button class="btn-contract">Eu quero !</button>
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
            let request_disabled_verify = false;
            $('#sendData').click(function () {
                if (!request_disabled_verify) {

                    var name = $('#inputName').val();
                    var phone = $('#inputPhone').val();
                    request_disabled_verify = true;
                    axios.post('{{ route('api.calling.send') }}', {
                        name: name,
                        phone: phone,
                    });
                    $('.form').hide();
                    $('.message_success').show();
                    $('.message_success').html('Informações enviadas com sucesso !!');
                    setTimeout(function() {
                        $('#weCall').modal('hide');
                    }, 3500)
                }


            });
        });

    </script>
@endsection