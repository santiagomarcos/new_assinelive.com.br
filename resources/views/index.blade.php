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
            <div class="digital-services-header"></div>
            <div class="digital-services-body">
                <div class="services-box-left"></div>
                <div class="services-box-rigth"></div>
            </div>
        </div>
    </section>
    <section class="benefits">
        <div class="content-benefits">
            <div class="benefits-header"></div>
            <div class="benefits-body"></div>
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