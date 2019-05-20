<footer class="content-footer">
    <div class="container-footer">
        <div id="faq" class="box-left">
            <h2 class="title-box-footer">Atendimento</h2>

            <ul class="content-question">
                <a href="{{ route('pages.faq') }}"><li class="items-atendance">Perguntas frequentes</li></a>
                <a href="{{ route('pages.regulaments') }}"><li class="items-atendance">Regulamento</li></a>
                <a href="https://www.speedtest.net/pt" target="_blank"><li class="items-atendance">Medidor de velocidade</li></a>
            </ul>
        </div>
        <div class="box-rigth">
            <h2 class="title-box-footer">Solicite agora seu plano e aproveite essa promoção por tempo limitado !!</h2>
            {{--<div class="icons-redes">
                <i class="fab fa-twitter"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
            </div>--}}
            <div class="box-offer-footer">
                <div class="content-price-and-band">
                    <div class="box-limit-brand-footer">
                        <p class="band-footer">150</p>
                        <p class="descr-limit-footer">Mega</p>
                    </div>
                    <div class="price-footer">
                        <span class="type-footer">R$</span>
                        <span class="value-footer">97</span>
                        <span class="footer-mounth-and-cents">
                        <span class="price-cents-footer">,50</span>
                        <span class="mounth-footer">/mês</span>
                    </span>
                    </div>
                </div>
                <div class="channel-footer">
                    <div class="icon-channels-footer"><img src="https://i.imgur.com/4FHlcUo.png" alt=""></div>
                    <div class="icon-plus-footer">+</div>
                    <div class="count-channels">
                        <div class="number-plan-footer">12</div>
                        <div class="desc-online-footer">canais online</div>
                    </div>
                </div>
                <div class="box-button-footer">
                    <a href="{{ route('pages.verifications', ['plan'=>'PLAN150M']) }}"><button class="btn-footer-buy">Contratar</button></a>
                </div>
            </div>
        </div>
    </div>
    <div class="content-after">
        <div class="coopright">@ 2019 Assine Live. Todos os direitos reservados.</div>
        <div class="developing">Desenvolvido por <a href="https://ffxsistemas.com">FFX Sistemas</a></div>
    </div>
</footer>
