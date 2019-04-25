<div>
    <div class="content-channels-sales">
        <div class="btn-toggle">
            <span class="first-toggle"></span>
            <span class="second-toggle"></span>
            <span class="third-toggle"></span>
        </div>
        <div class="title-channels">Canais de atendimento:</div>
        <ul class="content-channels">
            <li class="items-channels">{{ session('partner')['phone'] }}</li>
            <li class="items-channels">WhatAapp</li>
            <li class="items-channels">Me ligue</li>
            <li class="items-channels">Chat Online</li>
        </ul>
        <span class="location"><i class="fas fa-map-marker-alt"></i>São Paulo</span>
    </div>
    <nav class="content-navbar">
        <div class="header-navbar">
            <div class="navbar-brand">
                <a href="{{ route('home') }}" class="brand">
                    <p class="brand-firstname"><b>A</b>ssine live</p>
                    <p class="brand-secondname">Internet fibra</p>
                </a>
            </div>
            <ul class="content-menu">
                <a href="#"><li class="items-menu">Beneficios</li></a>|
                <a href="#"><li class="items-menu">Canais digitais</li></a>|
                <a href="#"><li class="items-menu">FAQ</li></a>
            </ul>
            <div class="box-button">
                <a href="{{ route('pages.verifications') }}"><button class="btn-buy-now" >Contratar</button></a>
            </div>
            <div class="box-number">
                <div class="description-call">Assine pelo nosso número</div>
                <div class="number-phone">{{ session('partner')['phone'] }}</div>
                <div class="attendance-day">Seg. a Sex 9h às 19h | Sab. 10h às 16h </div>
            </div>
        </div>
    </nav>
</div>
@include('components._menu-responsive')
