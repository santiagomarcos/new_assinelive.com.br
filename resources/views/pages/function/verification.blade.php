@extends('layout.template')

@section('extra-css')
    <style>
        .content-footer .container-footer .box-left{
            display: none;
        }

        .content-footer .container-footer .box-rigth {
            float: none;
            left: auto;
            width: auto;
            text-align: center;
            height: 80px;
        }

        .content-navbar .header-navbar .content-menu, .box-button{
            display: none;
        }

        .content-navbar .header-navbar .box-number{
            float: right;
        }

        @media (max-width: 992px) {
            .content-navbar .header-navbar .box-number{
                left: 0px;
            }
        }
    </style>
@endsection

@section('content')
    {{--@include('components._header')--}}
    <section id="section-verification">
        <div class="content-verification">
            <h1 class="title-verification">Verificar Cobertura</h1>
            <div class="form-verification">
                <form id="form_verification" action="" method="post">
                    <div class="box-form-verification">
                        <label for="name">Nome:</label>
                        <input type="text" id="l-name" name="name" class="" placeholder="Nome completo">
                    </div>
                    <div class="box-form-verification">
                        <label for="email">E-mail:</label>
                        <input type="email" id="l-email" name="email" class="" placeholder="example@email.com.br">
                    </div>
                    <div class="box-form-verification">
                        <label for="email">Celular:</label>
                        <input type="tel" id="telephone" name="telephone" class="" placeholder="(__)_____-____">
                    </div>
                    <div class="box-form-verification">
                        <label for="zip-code">CEP:</label>
                        <input type="tel" id="zip-code" name="zip-code" class="" placeholder="_____-___">
                    </div>
                    <div class="box-form-verification">
                        <label for="number-home">Número:</label>
                        <input type="tel" id="number-home" name="number-home" class="" placeholder="N°">
                    </div>
                    <span class="loading-viability"><img src="/images/mini-loading.gif" alt=""></span>

                    <div class="box-form-button">
                        <button class="btn-banner" id="btnVerification" disabled="true">Continuar</button>
                    </div>
                </form>
                <span id="desc-limit-broadband"></span>
            </div>
        </div>
    </section>
    <section id="section-contract">
        <div class="content-contract">
            <div class="description-plan-content">
                <div class="description-plan-header">
                    <h1 class="title-choose-plan">Plano escolhido:</h1>
                </div>
                <div class="description-plan-body">

                    <div class="box-info-plans">
                        <p class="title-info-plans">Informações gerais</p>
                        <div class="box-chanells-plans">
                            <p class="description-chanells">
                                Canais inclusos no plano:
                            </p>
                            <div class="chanells-content">
                                Fox Life, FX, Esporte Interativo, National Geographic, National Geo kids,
                                National Geo Wild, Fox Sports, National Geographic, Cartoon network Já,
                                Fox Sports2, Baby Tv, Natgeo Kids
                            </div>
                        </div>
                    </div>

                    <div class="sumary-price">
                        <div class="limit-broadband">
                            <p class="description-item-broadband">Internet Banda Larga</p>
                            <h2 class="desc-limit-broadband"><span id="desc-limit-broadband">60MB</span></h2>

                            <p id="teste"></p>
                        </div>
                        <div class="box-price-broadband">
                            <span class="type-money">R$</span>
                            <span class="value-broadband">105,00</span>
                            <p class="payment-mounth">por mês</p>
                        </div>
                    </div>

                    <div class="box-contract-plan">
                        <p class="contract-title">Contrato</p>
                        <div class="description-contract">
                            <p class="desc-taxa">
                                Taxa de adesão/instalação:
                                <strong >12x de R$ <span class="taxa-instalation"></span></strong>
                            </p>
                            <p class="loyatlity">Fidelização 12 meses</p>
                            <p class="modem">Modem Wifi inclúido</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-contract-content">
            <div class="form-contract-header">
                <h1 class="title-form-contract">Dados Pessoais:</h1>
            </div>

            <div class="form-contract-body" >
                <div class="form-contract">
                    <div class="box-form-contract">
                        <label for="name">Nome</label>
                        <input type="text" name="name" id="name" placeholder="EX: JOÃO MANOEL SANTOS LIMA" class="disabled-input" disabled value="">
                    </div>
                    <div class="box-form-contract">
                        <label for="document">CPF:</label>
                        <input type="text" name="document" id="document" placeholder="___.___.___-__" required>
                    </div>
                    <div class="box-form-contract">
                        <label for="cellphone">Celular:</label>
                        <input type="tel" name="cellphone" id="cellphone" placeholder="(__)_____-____" class="disabled-input"  required value="" disabled >
                    </div>
                    <div class="box-form-contract">
                        <label for="second-tel">Telefone:</label>
                        <input type="tel" name="second-tel" id="second-tel" placeholder="(__)_____-____"  required>
                    </div>
                    <div class="box-form-contract">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" placeholder="example@email.com.br" class="disabled-input" disabled required value="">
                    </div>
                    <div class="box-form-contract">
                        <label for="mother_name">Nome da mãe:</label>
                        <input type="text" name="mother_name" id="mother_name" placeholder="EX: MARIA JOAQUINA DOS SANTOS" required>
                    </div>
                    <div class="box-form-contract">
                        <label for="born">Data de nascimento:</label>
                        <input type="date" name="born" id="born" required>
                    </div>
                </div>

                <div class="form-contract">
                    <div class="data-people-content">
                        <h1 class="title-form-contract">Endereço de instalação:</h1>
                    </div>
                    <div class="box-form-contract-address zip">
                        <label for="zip-code-show">CEP:</label>
                        <input type="text" name="zip-code-show" id="zip-code-show" class="disabled-input" disabled
                               value="" >
                    </div>
                    <div class="box-form-contract-address addres">
                        <label for="address">Endereço:</label>
                        <input type="tel" name="address-show" id="address-show" placeholder="Endereço" class="disabled-input" disabled
                               value="" >
                    </div>
                    <div class="box-form-contract-address number">
                        <label for="number-show">Número</label>
                        <input type="tel" name="number-show" id="number-show" placeholder="N°" class="disabled-input" disabled
                               value="" >
                    </div>
                    <div class="box-form-contract-address">
                        <label for="complement">Complemento:</label>
                        <input type="text" name="complement" id="complement" placeholder="Complemento" >
                    </div>
                    <div class="box-form-contract-address">
                        <label for="neighborhood">Bairro:</label>
                        <input type="text" name="neighborhood" id="neighborhood" placeholder="Bairro" class="disabled-input" disabled
                               value="" >
                    </div>
                    <div class="box-form-contract-address state">
                        <label for="town">Cidade:</label>
                        <input type="text" name="state" id="state" placeholder="Cidade" class="disabled-input" disabled
                               value="">
                    </div>
                    <div class="box-form-contract-address city">
                        <label for="state">Estado:</label>
                        <input type="text" name="city" id="city" placeholder="Estado" class="disabled-input" disabled
                               value="">
                    </div>
                </div>

                <div class="form-contract maturity">
                    <div class="content-maturity-invoice">
                        <h3 class="title-maturity-invoice">Data de vencimento da fatura:</h3>
                    </div>
                    <div class="box-form-contract-maturity">
                        <label class="day-" for="day-1">1</label>
                        <input type="radio" name="day-maturity-invoice" class="btn-radio" id="day-1" value="1">
                        <label class="day-" for="day-7">7</label>
                        <input type="radio" name="day-maturity-invoice" class="btn-radio" id="day-7" value="7">
                        <label class="day-" for="day-10">10</label>
                        <input type="radio" name="day-maturity-invoice" class="btn-radio" id="day-10" value="10">
                        <label class="day-" for="day-12">12</label>
                        <input type="radio" name="day-maturity-invoice" class="btn-radio"  id="day-12" value="12">
                        <label class="day-" for="day-15">15</label>
                        <input type="radio" name="day-maturity-invoice" class="btn-radio" id="day-15" value="15">
                        <label class="day-" for="day-20">20</label>
                        <input type="radio" name="day-maturity-invoice" class="btn-radio" id="day-20" value="20">
                    </div>
                </div>

                <div class="form-contract conditions">
                    <label for="terms-conditions">
                        <input type="radio" name="terms-conditions" id="terms-conditions"> Estou ciente da fidelização do plano
                        e do <a target="_blank" href="" class="terms-conditions">Contrato de Prestação de Serviço</a>, e autorizo a TIM a entrar em contato comigo nos telefones informados.
                    </label>

                    <button class="btn-banner mbt" type="button" id="btnNextContract" >Contratar</button>
                </div>
            </div>
            <!--gif reload-->
            <div class="gif" id="loading" align="center">
                <div class="content-gif">
                    <img src="/images/loader.gif" height="150" width="150" alt="">
                </div>
                <h3>Estamos processando seu pedido...</h3>
            </div>

            <div class="sucess-content" id="sucess-content">
                <p>
                    Parabéns <strong class="name-client">   </strong> seu pedido foi ralizado com sucesso.
                    Se desejar pode conferir a descrição do plano contratado na caixa "PLANO ESCOLHIDO", o numero do seu pedido é : N°
                    <strong class="number-order"></strong>.<br>
                    Em até 24hr entraremos em contato para a finalização da sua compra.
                </p>
                <div class="network-social"></div>
            </div>

            <div class="inviability-content">
                <div class="content-text-inviability">
                    O limite de internet disponível em sua região no momento é no <span class="limit-band-modal"></span>
                    volte para página principal e escolha o limite da sua região.
                </div>
                <div class="content-btn">
                    <a href="../index.php"><button class="btnSearch btn-contract"><i class="fas fa-arrow-left"></i>Voltar</button></a>
                </div>
                <div class="network-social"></div>
            </div>
        </div>
    </section>

@endsection

@section('extra-scripts')
    <script type="text/javascript">
        $('document').ready(function () {
            // mask's on inputs
            $('#zip-code').mask('00000-000');
            $('#document').mask('000.000.000-00');
            $('#cellphone').mask('(00) 00000-0000');
            $('#second-tel').mask('(00) 00000-0000');
            $('#telephone').mask('(00) 00000-0000');
            $('#phone').mask('(00) 00000-0000');
            /**
             * Check Maturity Date
             */
            $('label[class^="day-"]').on('click', function () {
                $('label[class^="day-"]').removeClass('active-label');
                $(this).addClass('active-label');
            });
            var request_disabled_insert = false;

            /**
             * Send Data in API.
             */
            $("#btnNextContract").click(function() {

                /**
                 * Callback Success
                 * @param res
                 */
                var callbackInputSuccess = function (res) {
                    if (!res.data.success) {
                        request_disabled_insert = false;
                        $('#finalizado').hide();
                    } else {
                        var plan_wan =  $("#confirm-plan-wan").val();
                        $('#finalizado').show();
                        $('#loading').hide();
                        $('#waiting').hide();
                        $("#contract-plan").html(plan_wan);
                        $("#number-order").html(res.data.id);
                        request_disabled_insert = false;
                    }
                };

                /**
                 * Callback Fail (Internet Disconnect or No returned Data).
                 * @param res
                 */
                var callbackInputFail = function (res) {
                    request_disabled_insert = false;
                    $('#finalizado').show();
                    $('#loading').hide();
                    $('#waiting').hide();
                };

                /**
                 * Variables for INPUT
                 */
                var name = $("#name").val();
                var user = $('#user').val();
                var document = $("#document").val();
                var phone_cel = $("#cellphone").val();
                var phone_fixo = $("#second-tel").val();
                var state = $("#uf").val();
                var mother = $("#confirm-mother").val();
                var birth = $("#born").val();
                var zipcode = $('#cep').val();
                var street = $('#rua').val();
                var neighborhood = $('#bairro').val();
                var city = $('#cidade').val();
                var numberstreet = $('#numero').val();
                var plan_wan =  $("#confirm-plan-wan").val();
                var maturity_date =  $("#maturity_date").val();
                var complemento =  $("#complemento").val();
                var plan_phone =  $("#confirm_plan_phone").val();
                var portability =  $("#portability").val();
                var number_portability = $("#number_portability").val();
                var operator = $("#operator").val();



                if (!request_disabled_insert) {
                    request_disabled_insert = true;
                    axios.post('https://nox.ffxsistemas.com/api/v1/inputs/site', {
                        name: name,
                        user: user,
                        document: document,
                        cep: zipcode,
                        ENDERECO: street,
                        CIDADE: city,
                        UF: state,
                        phone_fixo: phone_fixo,
                        phone_cel: phone_cel,
                        plan_wan: plan_wan,
                        name_mother: mother,
                        date_birth: birth,
                        BAIRRO: neighborhood,
                        NUMEROEND: numeroCasa,
                        COMPLEMENTO: complemento,
                        email: email,
                        maturity_date: maturity_date,
                        plan_phone: plan_phone,
                        portability: portability,
                        number_portability: number_portability,
                        operator: operator
                    }).then(callbackInputSuccess, callbackInputFail);
                }
            })
        });
    </script>
@endsection
