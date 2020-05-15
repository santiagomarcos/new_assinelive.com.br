<div class="menu-responsive-content">
    <div class="content-channels-button-close"><span id="btn-close" class="far fa-times"></span></div>
    <div class="content-channels-sales-responsive">
        <div class="title-channels-responsive">Canais de atendimento</div>
        <ul class="content-channels-responsive">
            {{--<li class="items-channels-responsive">(11) 4890-9324</li>|--}}
            <a href="https://api.whatsapp.com/send?1=pt_BR&phone=55{{ session('partner')['whatsapp'] }}" target="_blank"><li class="items-channels-responsive">WhatsApp</li></a> |
            <a href="" id="weCalling" data-toggle="modal" data-target="#weCall"><li class="items-channels-responsive">Me ligue</li></a>
            {{--<li class="items-channels-responsive">Chat Online</li>--}}
        </ul>
        {{--<span class="location"><i class="fas fa-map-marker-alt"></i>São Paulo</span>--}}
    </div>
    <span class="line-bottom-responsive"></span>
    <div class="content-items-menu">
        <div class="title-menu-responsive">Menu</div>
        <ul class="content-menu-responsive">
            <a href="#benefits"><li class="items-menu-responsive">Beneficios</li></a>
            <a href="#digital_services"><li class="items-menu-responsive">Canais digitais</li></a>
            <a href="{{ route('pages.faq') }}"><li class="items-menu-responsive">Atendimento</li></a>
        </ul>
    </div>
</div>
