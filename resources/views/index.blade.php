@extends('layout.template')

@section('content')
    @include('components._header')
    <section class="container-carousel">
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
                                <li class="items-include-plan"> <i class="fas fa-phone-volume"></i> voz fixa limitada local</li>
                            </ul>
                            <div class="content-price">
                                <div class="begin-in">A partir de:</div>
                                <div class="box-prices">
                                    <span class="type-money">R$</span>
                                    <span class="value">89</span>
                                    <span class="mounth-and-cents">
                                        <div class="cents">,25</div>
                                        <div class="mounth">/mês</div>
                                    </span>
                                </div>
                                <div class="rate-hability">
                                    <p class="text">Habilitação 12x R$5,00</p>
                                </div>
                            </div>
                            <div class="content-btn-contract">
                                <button class="btn-contract">Contratar</button>
                            </div>
                        </div>
                        <div class="items-plan-footer">
                            <a href="#">Mais beneficíos v</a>
                        </div>
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
                                <p class="text-tip">Ideal para redes sociais, pesquisa de estudos e diversos sites.</p>
                            </div>
                            <ul class="content-items-include">
                                <li class="items-include-plan"><i class="fas fa-tv"></i> +12 canais online</li>
                                <li class="items-include-plan">Modem de wi-fi</li>
                                <li class="items-include-plan"><i class="fas fa-arrow-up"></i><strong> 30 MB</strong> de upload</li>
                                <li class="items-include-plan"><i class="fas fa-phone-volume"></i> voz fixa limitada local</li>
                            </ul>
                            <div class="content-price">
                                {{--<div class="begin-in">A partir de:</div>--}}
                                <div class="at-old-price">de <s>R$115,00</s>por</div>
                                <div class="box-prices">
                                    <span class="type-money">R$</span>
                                    <span class="value">105</span>
                                    <span class="mounth-and-cents">
                                        <div class="cents">,25</div>
                                        <div class="mounth">/mês</div>
                                    </span>
                                </div>
                                <div class="rate-hability">
                                    <p class="text">Habilitação 12x R$5,00</p>
                                </div>
                            </div>
                            <div class="content-btn-contract">
                                <button class="btn-contract">Contratar</button>
                            </div>
                        </div>
                        <div class="items-plan-footer">
                            <a href="#">Mais beneficíos v</a>
                        </div>
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
                                <p class="text-tip">Ideal para redes sociais, pesquisa de estudos e diversos sites.</p>
                            </div>
                            <ul class="content-items-include">
                                <li class="items-include-plan"><i class="fas fa-tv"></i> +2 canais online</li>
                                <li class="items-include-plan">Modem de wi-fi</li>
                                <li class="items-include-plan"> <i class="fas fa-arrow-up"></i> 60 MB</strong> de upload</li>
                                <li class="items-include-plan"><i class="fas fa-phone-volume"></i> voz fixa limitada local</li>
                            </ul>
                            <div class="content-price">
                                {{--<div class="begin-in">A partir de:</div>--}}
                                <div class="at-old-price">de <s>R$130,00</s>por</div>
                                <div class="box-prices">
                                    <span class="type-money">R$</span>
                                    <span class="value">89</span>
                                    <span class="mounth-and-cents">
                                        <div class="cents">,25</div>
                                        <div class="mounth">/mês</div>
                                    </span>
                                </div>
                                <div class="rate-hability">
                                    <p class="text">Habilitação 12x R$10,00</p>
                                </div>
                            </div>
                            <div class="content-btn-contract">
                                <button class="btn-contract">Contratar</button>
                            </div>
                        </div>
                        <div class="items-plan-footer">
                            <a href="#">Mais beneficíos v</a>
                        </div>
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
                                <p class="text-tip">Ideal para redes sociais, pesquisa de estudos e diversos sites.</p>
                            </div>
                            <ul class="content-items-include">
                                <li class="items-include-plan"><i class="fas fa-tv"></i> +13 canais online</li>
                                <li class="items-include-plan">Modem de wi-fi</li>
                                <li class="items-include-plan"> <i class="fas fa-arrow-up"></i> 60 MB</strong> de upload</li>
                                <li class="items-include-plan"><i class="fas fa-phone-volume"></i> voz fixa limitada local</li>
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
                                <button class="btn-contract">Contratar</button>
                            </div>
                        </div>
                        <div class="items-plan-footer">
                            <a href="#">Mais beneficíos v</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="digital-services">
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
                            <img src="https://i.imgur.com/j9wcPLz.png" alt="">
                        </div>
                        <div class="cellphone-channels">
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
    <section class="benefits">
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
                    <div class="box-local-space">
                        <div class="box-local-header">
                            <span class="icon-phone"><i class="fas fa-phone-volume"></i></span>
                            <span class="icon-arrow"><i class="fas fa-arrow-right"></i></span>
                            <span class="icon-phone-2"><i class="fas fa-phone"></i></span>
                        </div>
                        <div class="box-local-footer">
                            <p class="description-plan-call">Voz ilimitado local</p>
                        </div>
                    </div>
                </div>
                <div class="benefits-box-local-hover">
                    <div class="box-local-space">
                        <div class="box-local-header-hover"></div>
                        <div class="box-local-footer-hover"></div>
                    </div>
                </div>

                <div class="benefits-box-national">
                    <div class="box-national-space">
                        <div class="box-national-header">
                            <span class="icon-phone"><i class="fas fa-phone-volume"></i></span>
                            <span class="icon-brazil"><i class="fas fa-arrow-right"></i></span>
                            <span class="icon-arrow"><img src="https://i.imgur.com/hzYveca.png" alt=""></span>
                        </div>
                        <div class="box-national-footer">
                            <p class="description-plan-call">Voz ilimitado brasil</p>
                        </div>
                    </div>
                </div>
                <div class="benefits-box-national-hover">
                    <div class="box-national-space">
                        <div class="box-national-header-hover"></div>
                        <div class="box-national-footer-hover"></div>
                    </div>
                </div>

                <div class="benefits-box-international">
                    <div class="box-space-international">
                        <div class="box-international-header">
                            <span class="icon-phone"></span>
                            <span class="icon-arrow"></span>
                            <span class="icon-brazil"></span>
                        </div>
                        <div class="box-international-footer">
                            <p class="description-plan-call">Voz ilimitado br + ldi</p>
                        </div>
                    </div>
                </div>
                <div class="benefits-box-international-hover">
                    <div class="box-international-space">
                        <div class="box-international-header-hover"></div>
                        <div class="box-international-footer-hover"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us">
        <div class="contetn-contact-us">
            <div class="contact-us-header"></div>
            <div class="contact-us-body"></div>
        </div>
    </section>
    <div class="speed-test-band">
        <div class="boxspeed-test">Teste de Internet</div>
    </div>
@endsection