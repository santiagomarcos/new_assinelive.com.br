<div>
    <div class="content-channels-sales">
        <div class="btn-toggle">
            <span class="first-toggle"></span>
            <span class="second-toggle"></span>
            <span class="third-toggle"></span>
        </div>
        <div class="title-channels">Canais de atendimento:</div>
        <ul class="content-channels">
            <li class="items-channels">{{ session('partner')['phone'] }}</li> |
            <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5562982005222" target="_blank"><li class="items-channels">Whatsapp</li></a> |
            <a href="" id="weCalling" data-toggle="modal" data-target="#weCall"><li class="items-channels">Me ligue</li></a> |
            <a id="btnChatTp" href=""><li class="items-channels">Chat Online</li></a>
        </ul>
        <span class="location"><i class="fas fa-map-marker-alt"></i>{{ $city }}</span>
    </div>
    <nav class="content-navbar">
        <div class="header-navbar">
            <div class="navbar-brand">
                <a href="{{ route('home') }}" class="brand">
                    <img src="https://assets-global.website-files.com/5b240575932c8787ad2be1c5/5da4e83adfaa0e05cb8fbd77_LogoTIMLIVE2.svg" alt="TIM Live" width="150" class="logotipo menu">
                    <div class="texto pequeno">Agente Autorizado</div>
                </a>
            </div>
            <ul class="content-menu">
                <a href="#benefits"><li class="items-menu">Benefícios</li></a>|
                <a href="#digital_services"><li class="items-menu">Canais digitais</li></a>|
                <a href="{{ route('pages.faq') }}"><li class="items-menu">Atendimento</li></a>
            </ul>
            <div class="box-button">
                <a href="" id="weCalling" data-toggle="modal" data-target="#weCall"><button class="btn-buy-now" >ME LIGUE</button></a>
            </div>
            <div class="box-number">
                <div class="description-call">Assine pelo nosso número</div>
                <div class="number-phone">{{ session('partner')['phone'] }}</div>
                <div class="attendance-day">Seg. a Sex 9h às 21h | Sab. 10h às 16h </div>
            </div>
        </div>
    </nav>
</div>
@include('components._menu-responsive')
