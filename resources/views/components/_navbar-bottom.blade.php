<div class="content-navbar-bottom">
    <div class="box-navbar-bottom">
        <button class="description-navbar-bottom">Assine <br> agora</button>
        <a href="#" id="weCalling" data-toggle="modal" data-target="#weCall">
            <button class="we-calling-you">
                <span class="contten-button">
                    <span class="icon-button"><i class="fas fa-phone-volume"></i></span>
                    <span class="value-button">
                        <p class="first-btn-title">Nós ligamos</p>
                        <p class="second-btn-title">para você</p>
                    </span>
                </span>
            </button>
        </a>
        <button id="btnChatBt" class="buy-to-chat">
            <span class="contten-button">
                <span class="icon-button"><i class="fas fa-comments"></i></span>
                <span class="value-button">
                    <p class="first-btn-title">Compre pelo</p>
                    <p class="second-btn-title">chat</p>
                </span>
            </span>
        </button>
        <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5511986180093"target="_blank">
            <button  class="chat-online">
            <span class="contten-button">
                <span class="icon-button"><i class="fab fa-whatsapp"></i></span>
                <span class="value-button">
                    <p class="first-btn-title">Chame no nosso</p>
                    <p class="second-btn-title">Whatsapp</p>
                </span>
            </span>
            </button>
        </a>
        <button id="btn-up" class="top-page">
            <span class="contten-button">
                <p>
                    <i class="fas fa-angle-double-up"></i>
                    <p class="desc-arrow-up">Topo</p>
                </p>
            </span>
        </button>
        <div class="">
            <button class="box-number-navbar-bottom">
                <span class="contten-button">
                    <div class="description-number-navbar-bottom">Assine pelo nosso número</div>
                    <div class="number-phone-navbar-bottom">{{ session('partner')['phone'] }}</div>
                </span>
            </button>
        </div>
    </div>
</div>
