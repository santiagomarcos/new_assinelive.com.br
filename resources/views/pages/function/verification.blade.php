@extends('layout.template')

@section('extra-css')
    <style>
        .content-footer .container-footer .box-left {
            display: none;
        }

        .content-footer .container-footer .box-rigth {
            float: none;
            left: auto;
            width: auto;
            text-align: center;
            height: auto;
        }

        .content-navbar .header-navbar .content-menu, .box-button {
            display: none;
        }

        .content-navbar .header-navbar .box-number {
            float: right;
        }

        .content-navbar .header-navbar .box-number {
            right: 0px;
        }

        @media (max-width: 992px) {
            .content-navbar .header-navbar .box-number {
                left: 0px;
            }
        }
    </style>
@endsection

@section('content')
    {{--@include('components._header')--}}
    @include('components._modal_calling')
    @include('components._modal-wttx')
    <div id="main-verification">
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
                            <input type="text" id="zip-code" name="zip-code" class="" placeholder="_____-___">
                        </div>
                        <div class="box-form-verification">
                            <label for="number-home">Número:</label>
                            <input type="text" id="number-home" name="number-home" class="" placeholder="N°">
                        </div>
                        <span class="loading-viability" style="display: none;">
                        <img src="/images/mini-loading.gif" alt="">
                    </span>

                        <div class="box-form-button">
                            <button class="btn-banner" id="btnVerification" type="button">Verificar</button>
                        </div>
                    </form>
                    <!--gif reload-->
                    <div class="gif" id="loading-viability" align="center">
                        <div class="content-gif">
                            <img src="/images/loader.gif" height="150" width="150" alt="">
                        </div>
                        <h3 class="waitinig">Aguarde... Estamos pesquisando a viabilidade.</h3>
                    </div>
                    <span id="desc-limit-broadband"></span>
                    <div class="inviability-content" id="inviability-content">
                        <div class="content-text-inviability">
                            <h1> Desculpe :( </h1> <br>
                            Não temos ainda viabilidade no seu endereço, mas não se preocupe! quando estivermos chegando
                            em sua região entraremos em contato via e-mail ou telefone.
                        </div>
                        <div class="content-btn">
                            <a href="{{ route('home') }}">
                                <button class="btnSearch btn-contract"><i class="fas fa-arrow-left"></i>Voltar</button>
                            </a>
                        </div>
                        <div class="network-social"></div>
                    </div>

                    <div class="inviability-content" id="minimum-content">
                        <div class="content-text-inviability">
                            O limite de internet disponível em sua região no momento é <span
                                class="limit-band-modal"></span>. Volte para página principal e escolha a velocidade de
                            acordo com o critério acima.
                        </div>
                        <div class="content-btn">
                            <a href="{{ route('home') }}">
                                <button class="btnSearch btn-contract"><i class="fas fa-arrow-left"></i>Voltar</button>
                            </a>
                        </div>
                        <div class="network-social"></div>
                    </div>

                </div>
            </div>
        </section>
        <section id="section-contract">
            <div class="content-contract">
                <div class="description-plan-content">
                    <div class="description-plan-header">
                        <h1 class="title-choose-plan">Plano escolhido</h1>
                    </div>
                    <div class="description-plan-body">

                        <div class="box-info-plans">
                            <p class="title-info-plans">Canais inclusos no plano</p>
                            <div class="box-chanells-plans">
                                <div class="chanells-content">
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
                                <span class="type-money"></span>
                                <span class="value-broadband">105,00</span> /mês
                                {{--<p class="payment-mounth">por mês</p>--}}
                            </div>
                        </div>

                        <div class="box-contract-plan">
                            <p class="contract-title">Contrato</p>
                            <div class="description-contract">
                                <p class="desc-taxa">
                                    Taxa de adesão/instalação
                                    <strong>12x de R$ <span class="taxa-instalation"></span></strong>
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
                    <h1 class="title-form-contract">Formulário de Pedido</h1>
                </div>

                <div class="form-contract-body">
                    <div class="form-contract">
                        <div class="data-people-content">
                            <h1 class="title-form-contract">Dados Pessoais</h1>
                        </div>
                        <div class="box-form-contract">
                            <label for="name">Nome</label>
                            <input type="text" name="name" id="name" placeholder="EX: JOÃO MANOEL SANTOS LIMA"
                                   class="disabled-input" disabled value="">
                        </div>
                        <div class="box-form-contract">
                            <label for="document">CPF:</label>
                            <input type="text" name="document" onchange="enviaCPF(this.value);" id="document"
                                   placeholder="___.___.___-__" required>
                        </div>
                        <div class="box-form-contract">
                            <label for="cellphone">Celular:</label>
                            <input type="tel" name="cellphone" id="cellphone" placeholder="(__)_____-____"
                                   class="disabled-input" required value="" disabled>
                        </div>
                        <div class="box-form-contract">
                            <label for="second-tel">Telefone:</label>
                            <input type="tel" name="second-tel" id="second-tel" placeholder="(__)_____-____" required>
                        </div>
                        <div class="box-form-contract">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email" placeholder="example@email.com.br"
                                   class="disabled-input" disabled required value="">
                        </div>
                        <div class="box-form-contract">
                            <label for="mother_name">Nome da mãe:</label>
                            <input type="text" name="mother_name" id="mother_name"
                                   placeholder="EX: MARIA JOAQUINA DOS SANTOS" required>
                        </div>
                        <div class="box-form-contract">
                            <label for="born">Data de nascimento:</label>
                            <input type="text" name="born" id="born" required>
                        </div>
                    </div>

                    <div class="form-contract">
                        <div class="data-people-content">
                            <h1 class="title-form-contract">Endereço de instalação:</h1>
                        </div>
                        <div class="box-form-contract-address zip">
                            <label for="zip-code-show">CEP:</label>
                            <input type="text" name="zip-code-show" id="zip-code-show" class="disabled-input" disabled
                                   value="">
                        </div>
                        <div class="box-form-contract-address addres">
                            <label for="address">Endereço:</label>
                            <input type="tel" name="address-show" id="address-show" placeholder="Endereço"
                                   class="disabled-input" disabled
                                   value="">
                        </div>
                        <div class="box-form-contract-address number">
                            <label for="number-show">Número</label>
                            <input type="tel" name="number-show" id="number-show" placeholder="N°"
                                   class="disabled-input" disabled
                                   value="">
                        </div>
                        <div class="box-form-contract-address">
                            <label for="complement">Complemento:</label>
                            <input type="text" name="complement" id="complement" placeholder="Complemento">
                        </div>
                        <div class="box-form-contract-address">
                            <label for="neighborhood">Bairro:</label>
                            <input type="text" name="neighborhood" id="neighborhood" placeholder="Bairro"
                                   class="disabled-input" disabled
                                   value="">
                        </div>
                        <div class="box-form-contract-address state">
                            <label for="town">Cidade:</label>
                            <input type="text" name="city" id="city" placeholder="Cidade" class="disabled-input"
                                   disabled
                                   value="">
                        </div>
                        <div class="box-form-contract-address city">
                            <label for="state">Estado:</label>
                            <input type="text" name="state" id="state" placeholder="Estado" class="disabled-input"
                                   disabled
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
                            <input type="radio" name="day-maturity-invoice" class="btn-radio" id="day-12" value="12">
                            <label class="day-" for="day-15">15</label>
                            <input type="radio" name="day-maturity-invoice" class="btn-radio" id="day-15" value="15">
                            <label class="day-" for="day-20">20</label>
                            <input type="radio" name="day-maturity-invoice" class="btn-radio" id="day-20" value="20">
                        </div>
                    </div>

                    <div class="form-contract conditions">
                        <label for="terms-conditions">
                            <input type="radio" name="terms-conditions" id="terms-conditions"> Estou ciente da
                            fidelização do plano
                            e do <a target="_blank" href="" class="terms-conditions">Contrato de Prestação de
                                Serviço</a>, e autorizo a TIM a entrar em contato comigo nos telefones informados.
                        </label>

                        <button class="btn-banner mbt" type="button" id="btnNextContract" disabled>Solicitar Plano
                        </button>
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
                        Parabéns <strong class="name-client"> </strong>! seu pedido foi realizado com sucesso.
                        Se desejar pode conferir a descrição do plano contratado na caixa "PLANO ESCOLHIDO", o numero do
                        seu pedido é : N°
                        <strong class="number-order"></strong>.<br>
                        Em até 24hr entraremos em contato para a finalização da sua compra.
                    </p>
                    <div class="network-social"></div>
                </div>

            </div>
        </section>
        <section id="section-contract-wttx">
            <div class="content-contract">
                <div class="description-plan-content">
                    <div class="description-plan-header">
                        <h1 class="title-choose-plan">Plano escolhido</h1>
                    </div>
                    <div class="description-plan-body">
                        <div class="box-info-plans">
                            <p class="title-info-plans">Beneficios:</p>
                            <ul class="content-items-include">
                                <center>
                                    <li class="items-include-plan"><i class="fas fa-server"></i> Tim backup 150GB</li>
                                    <li class="items-include-plan"><i class="fas fa-user-lock"></i> Tim Protect Filhos
                                    </li>
                                    <li class="items-include-plan"><i class="fas fa-shield-alt"></i> Tim Protect
                                        Segurança
                                    </li>
                                    <li class="items-include-plan"><i class="fas fa-wifi"></i> Tim Protect wi-fi</li>
                                </center>
                            </ul>
                        </div>

                        <div class="sumary-price">
                            <div class="limit-broadband">
                                <p class="description-item-broadband">Internet Banda Larga</p>
                                <h2 class="desc-limit-broadband"><span id="desc-limit-broadband-wttx">60MB</span></h2>

                                <p id="teste">Até 5 Mega Download/Upload</p>
                            </div>
                            <div class="box-price-broadband">
                                <span class="type-money"></span>
                                <span class="value-broadband" id="value-broadband-wttx">105,00</span> /mês
                                {{--<p class="payment-mounth">por mês</p>--}}
                            </div>
                        </div>

                        <div class="box-contract-plan">
                            <p class="contract-title">Contrato</p>
                            <div class="description-contract">
                                <p class="desc-taxa">
                                    Taxa de adesão/instalação
                                    <s>12x de R$ 5,00</s> <strong>Gratuita</strong> <span
                                        class="taxa-instalation"></span>
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
                    <h1 class="title-form-contract">Formulário de Pedido</h1>
                </div>

                <div class="form-contract-body">
                    <div class="form-contract">
                        <div class="data-people-content">
                            <h1 class="title-form-contract">Dados Pessoais</h1>
                        </div>
                        <div class="box-form-contract">
                            <label for="name">Nome</label>
                            <input type="text" name="name-wttx" id="name-wttx" placeholder="EX: JOÃO MANOEL SANTOS LIMA"
                                   class="disabled-input" disabled value="">
                        </div>
                        <div class="box-form-contract">
                            <label for="document">CPF:</label>
                            <input type="text" name="document-wttx" id="document-wttx" onchange="enviaCPF(this.value);"
                                   id="document"
                                   placeholder="___.___.___-__" required>
                        </div>
                        <div class="box-form-contract">
                            <label for="cellphone">Celular:</label>
                            <input type="tel" name="cellphone-wttx" id="cellphone-wttx" placeholder="(__)_____-____"
                                   class="disabled-input" required value="" disabled>
                        </div>
                        <div class="box-form-contract">
                            <label for="second-tel">Telefone:</label>
                            <input type="tel" name="second-tel-wttx" id="second-tel-wttx" placeholder="(__)_____-____"
                                   required>
                        </div>
                        <div class="box-form-contract">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email-wttx" placeholder="example@email.com.br"
                                   class="disabled-input" disabled required value="">
                        </div>
                        <div class="box-form-contract">
                            <label for="mother_name">Nome da mãe:</label>
                            <input type="text" name="mother_name" id="mother_name_wttx"
                                   placeholder="EX: MARIA JOAQUINA DOS SANTOS" required>
                        </div>
                        <div class="box-form-contract">
                            <label for="born">Data de nascimento:</label>
                            <input type="text" name="born" id="born_wttx" required>
                        </div>
                    </div>

                    <div class="form-contract wttx-form">
                        <div class="box-form-contract">
                            <label for="born">Tipo de documento:</label>
                            <select id="type_document_wttx" name="doc_type_wttx" required="">
                                <option value=""> -</option>
                                <option value="Identidade Estrangeira">Identidade Estrangeira</option>
                                <option value="Carteira de Identidade">Carteira de Identidade</option>
                                <option value="CNH">CNH</option>
                                <option value="Identidade Profissional">Identidade Profissional</option>
                                <option value="Identidade Militar">Identidade Militar</option>
                                <option value="Identidade Funcional">Identidade Funcional</option>
                                <option value="Carteira de Estrangeiro">Carteira de Estrangeiro</option>
                                <option value="Carteira de trabalho">Carteira de trabalho</option>
                                <option value="Certidão de Nascimento">Certidão de Nascimento</option>
                                <option value="Outros">Outros</option>
                            </select>
                        </div>
                        <div class="box-form-contract">
                            <label for="born">Orgão Emissor:</label>
                            <select id="org_emission_wttc" name="doc_org">
                                <option value=""> -</option>
                                <option value="SSP - Secretaria de Segurança Pública do Estado">SSP - Secretaria de
                                    Segurança Pública do Estado
                                </option>
                                <option value="Cartório Civil">Cartório Civil</option>
                                <option value="Polícia Federal">Polícia Federal</option>
                                <option value="Detran">Detran</option>
                                <option value="ABNC - Academia Brasileira de Neurocirurgia">ABNC - Academia Brasileira
                                    de Neurocirurgia
                                </option>
                                <option
                                    value="CGPI/DUREX/DPF - Coordenação Geral de Polícia de Imigração da Polícia Federal">
                                    CGPI/DUREX/DPF - Coordenação Geral de Polícia de Imigração da Polícia Federal
                                </option>
                                <option value="CGPI - Coordenação-Geral de Privilégios e Imunidades">CGPI -
                                    Coordenação-Geral de Privilégios e Imunidades
                                </option>
                                <option
                                    value="CGPMAF - Coordenadoria Geral de Polícia Marítima, Aeronáutica e de Fronteiras">
                                    CGPMAF - Coordenadoria Geral de Polícia Marítima, Aeronáutica e de Fronteiras
                                </option>
                                <option value="CNIG - Conselho Nacional de Imigração">CNIG - Conselho Nacional de
                                    Imigração
                                </option>
                                <option value="CNT - Carteira Nacional de Habilitação">CNT - Carteira Nacional de
                                    Habilitação
                                </option>
                                <option value="COREN - Conselho Regional de Enfermagem">COREN - Conselho Regional de
                                    Enfermagem
                                </option>
                                <option value="CORECON - Conselho Regional de Economia">CORECON - Conselho Regional de
                                    Economia
                                </option>
                                <option value="CRA - Conselho Regional de Administração">CRA - Conselho Regional de
                                    Administração
                                </option>
                                <option value="CRAS - Centro de Referência de Assistência Social">CRAS - Centro de
                                    Referência de Assistência Social
                                </option>
                                <option value="CRB - Conselho Regional de Biblioteconomia">CRB - Conselho Regional de
                                    Biblioteconomia
                                </option>
                                <option value="CRC - Conselho Regional de Contabilidade">CRC - Conselho Regional de
                                    Contabilidade
                                </option>
                                <option value="CRE - Conselho Regional de Estatística">CRE - Conselho Regional de
                                    Estatística
                                </option>
                                <option value="CREA - Conselho Regional de Engenharia e Agronomia">CREA - Conselho
                                    Regional de Engenharia e Agronomia
                                </option>
                                <option value="CRECI - Conselho Regional de Corretores de Imóveis">CRECI - Conselho
                                    Regional de Corretores de Imóveis
                                </option>
                                <option value="CREFIT - Conselho Regional de Fisioterapia e Terapia Ocupacional">CREFIT
                                    - Conselho Regional de Fisioterapia e Terapia Ocupacional
                                </option>
                                <option value="CRESS - Conselho Regional de Serviço Social">CRESS - Conselho Regional de
                                    Serviço Social
                                </option>
                                <option value="CRF - Conselho Regional de Farmácia">CRF - Conselho Regional de
                                    Farmácia
                                </option>
                                <option value="CRM - Conselho Regional de Medicina">CRM - Conselho Regional de
                                    Medicina
                                </option>
                                <option value="CRN - Conselho Regional de Nutrição">CRN - Conselho Regional de
                                    Nutrição
                                </option>
                                <option value="CRO - Conselho Regional de Odontologia">CRO - Conselho Regional de
                                    Odontologia
                                </option>
                                <option value="CRP - Conselho Regional de Psicologia">CRP - Conselho Regional de
                                    Psicologia
                                </option>
                                <option value="CRPRE - Conselho Regional de Profissionais de Relações Públicas">CRPRE -
                                    Conselho Regional de Profissionais de Relações Públicas
                                </option>
                                <option value="CRQ - Conselho Regional de Química">CRQ - Conselho Regional de Química
                                </option>
                                <option value="CRRC - Conselho Regional de Representantes Comerciais">CRRC - Conselho
                                    Regional de Representantes Comerciais
                                </option>
                                <option value="CRMV - Conselho Regional de Medicina Veterinária">CRMV - Conselho
                                    Regional de Medicina Veterinária
                                </option>
                                <option value="CSC - Carteira Sede Carpina de Pernambuco">CSC - Carteira Sede Carpina de
                                    Pernambuco
                                </option>
                                <option value="CTPS - Carteira de Trabalho e Previdência Social">CTPS - Carteira de
                                    Trabalho e Previdência Social
                                </option>
                                <option value="DIC - Diretoria de Identificação Civil">DIC - Diretoria de Identificação
                                    Civil
                                </option>
                                <option value="DIREX - Diretoria-Executiva">DIREX - Diretoria-Executiva</option>
                                <option value="DPMAF - Divisão de Polícia Marítima, Área e de Fronteiras">DPMAF -
                                    Divisão de Polícia Marítima, Área e de Fronteiras
                                </option>
                                <option value="DPT - Departamento de Polícia Técnica Geral">DPT - Departamento de
                                    Polícia Técnica Geral
                                </option>
                                <option value="DST - Programa Municipal DST/Aids">DST - Programa Municipal DST/Aids
                                </option>
                                <option value="FGTS - Fundo de Garantia do Tempo de Serviço">FGTS - Fundo de Garantia do
                                    Tempo de Serviço
                                </option>
                                <option value="FIPE - Fundação Instituto de Pesquisas Econômicas">FIPE - Fundação
                                    Instituto de Pesquisas Econômicas
                                </option>
                                <option value="FLS - Fundação Lyndolpho Silva">FLS - Fundação Lyndolpho Silva</option>
                                <option value="GOVGO - Governo do Estado de Goiás">GOVGO - Governo do Estado de Goiás
                                </option>
                                <option value="I CLA - Carteira de Identidade Classista">I CLA - Carteira de Identidade
                                    Classista
                                </option>
                                <option value="IFP - Instituto Félix Pacheco">IFP - Instituto Félix Pacheco</option>
                                <option value="IGP - Instituto Geral de Perícias">IGP - Instituto Geral de Perícias
                                </option>
                                <option
                                    value="IICCECF/RO - Instituto de Identificação Civil e Criminal Engrácia da Costa Francisco de Rondônia">
                                    IICCECF/RO - Instituto de Identificação Civil e Criminal Engrácia da Costa Francisco
                                    de Rondônia
                                </option>
                                <option value="IIMG - Inter-institutional Monitoring Group">IIMG - Inter-institutional
                                    Monitoring Group
                                </option>
                                <option value="IML - Instituto Médico-Legal">IML - Instituto Médico-Legal</option>
                                <option value="IPC - Índice de Preços ao Consumidor">IPC - Índice de Preços ao
                                    Consumidor
                                </option>
                                <option value="IPF - Instituto Pereira Faustino">IPF - Instituto Pereira Faustino
                                </option>
                                <option value="MAE - Ministério da Aeronáutica">MAE - Ministério da Aeronáutica</option>
                                <option value="MEX - Ministério do Exército">MEX - Ministério do Exército</option>
                                <option value="MMA - Ministério da Marinha">MMA - Ministério da Marinha</option>
                                <option value="OAB - Ordem dos Advogados do Brasil">OAB - Ordem dos Advogados do
                                    Brasil
                                </option>
                                <option value="OMB - Ordens dos Músicos do Brasil">OMB - Ordens dos Músicos do Brasil
                                </option>
                                <option value="PCMG - Policia Civil do Estado de Minas Gerais">PCMG - Policia Civil do
                                    Estado de Minas Gerais
                                </option>
                                <option value="PMMG - Polícia Militar do Estado de Minas Gerais">PMMG - Polícia Militar
                                    do Estado de Minas Gerais
                                </option>
                                <option value="POF ou DPF - Polícia Federal">POF ou DPF - Polícia Federal</option>
                                <option value="POM - Polícia Militar">POM - Polícia Militar</option>
                                <option value="SDS - Secretaria de Defesa Social (Pernambuco)">SDS - Secretaria de
                                    Defesa Social (Pernambuco)
                                </option>
                                <option value="SNJ - Secretaria Nacional de Justiça / Departamento de Estrangeiros">SNJ
                                    - Secretaria Nacional de Justiça / Departamento de Estrangeiros
                                </option>
                                <option value="SECC - Secretaria de Estado da Casa Civil">SECC - Secretaria de Estado da
                                    Casa Civil
                                </option>
                                <option
                                    value="SEJUSP - Secretaria de Estado de Justiça e Segurança Pública – Mato Grosso">
                                    SEJUSP - Secretaria de Estado de Justiça e Segurança Pública – Mato Grosso
                                </option>
                                <option value="SES ou EST - Carteira de Estrangeiro">SES ou EST - Carteira de
                                    Estrangeiro
                                </option>
                                <option value="SESP - Secretaria de Estado da Segurança Pública do Paraná">SESP -
                                    Secretaria de Estado da Segurança Pública do Paraná
                                </option>
                                <option value="SJS - Secretaria da Justiça e Segurança">SJS - Secretaria da Justiça e
                                    Segurança
                                </option>
                                <option value="SJTC - Secretaria da Justiça do Trabalho e Cidadania">SJTC - Secretaria
                                    da Justiça do Trabalho e Cidadania
                                </option>
                                <option value="SJTS - Secretaria da Justiça do Trabalho e Segurança">SJTS - Secretaria
                                    da Justiça do Trabalho e Segurança
                                </option>
                                <option value="SPTC - Secretaria de Polícia Técnico-Científica">SPTC - Secretaria de
                                    Polícia Técnico-Científica
                                </option>
                            </select>
                        </div>
                        <div class="box-form-contract">
                            <label for="born">Número do Documento:</label>
                            <input type="text" name="born" id="number_doc_wttc" required>
                        </div>
                        <div class="box-form-contract">
                            <label for="born">Naturalidade:</label>
                            <input type="text" id="naturality_wttc" required>
                        </div>
                        <div class="box-form-contract">
                            <label for="born">UF:</label>
                            <input type="text" name="born" id="uf_wttx" required>
                        </div>
                        <div class="box-form-contract">
                            <label for="born">Data de Emissão do Documento:</label>
                            <input type="text" name="born" id="emission_wttx" required>
                        </div>
                    </div>

                    <div class="form-contract">
                        <div class="data-people-content">
                            <h1 class="title-form-contract">Endereço de instalação:</h1>
                        </div>
                        <div class="box-form-contract-address zip">
                            <label for="zip-code-show">CEP:</label>
                            <input type="text" name="zip-code-show" id="zip-code-show-wttx" class="disabled-input"
                                   disabled
                                   value="">
                        </div>
                        <div class="box-form-contract-address addres">
                            <label for="address">Endereço:</label>
                            <input type="tel" name="address-show" id="address-show-wttx" placeholder="Endereço"
                                   class="disabled-input" disabled
                                   value="">
                        </div>
                        <div class="box-form-contract-address number">
                            <label for="number-show">Número</label>
                            <input type="tel" name="number-show" id="number-show-wttx" placeholder="N°"
                                   class="disabled-input" disabled
                                   value="">
                        </div>
                        <div class="box-form-contract-address">
                            <label for="complement">Complemento:</label>
                            <input type="text" name="complement" id="complement-wttx" placeholder="Complemento">
                        </div>
                        <div class="box-form-contract-address">
                            <label for="neighborhood">Bairro:</label>
                            <input type="text" name="neighborhood" id="neighborhood-wttx" placeholder="Bairro"
                                   class="disabled-input" disabled
                                   value="">
                        </div>
                        <div class="box-form-contract-address state">
                            <label for="town">Cidade:</label>
                            <input type="text" name="city" id="city-wttx" placeholder="Cidade" class="disabled-input"
                                   disabled
                                   value="">
                        </div>
                        <div class="box-form-contract-address city">
                            <label for="state">Estado:</label>
                            <input type="text" name="state" id="state-wttx" placeholder="Estado" class="disabled-input"
                                   disabled
                                   value="">
                        </div>
                    </div>

                    <div class="form-contract wttx-form-ref">
                        <div class="box-form-contract">
                            <label for="state">Referencia para entrega do modem:</label>
                            <textarea rows="8" cols="60" id="reference-wttx"></textarea>
                        </div>
                    </div>

                    <div class="form-contract maturity">
                        <div class="content-maturity-invoice">
                            <h3 class="title-maturity-invoice">Data de vencimento da fatura:</h3>
                        </div>
                        <div class="box-form-contract-maturity">
                            <label class="day-wttx-" for="day-wttx-1">1</label>
                            <input type="radio" name="day-maturity-invoice-wttx" class="btn-radio" id="day-wttx-1"
                                   value="1">
                            <label class="day-wttx-" for="day-wttx-7">7</label>
                            <input type="radio" name="day-maturity-invoice-wttx" class="btn-radio" id="day-wttx-7"
                                   value="7">
                            <label class="day-wttx-" for="day-wttx-10">10</label>
                            <input type="radio" name="day-maturity-invoice-wttx" class="btn-radio" id="day-wttx-10"
                                   value="10">
                            <label class="day-wttx-" for="day-wttx-12">12</label>
                            <input type="radio" name="day-maturity-invoice-wttx" class="btn-radio" id="day-wttx-12"
                                   value="12">
                            <label class="day-wttx-" for="day-wttx-15">15</label>
                            <input type="radio" name="day-maturity-invoice-=wttx" class="btn-radio" id="day-wttx-15"
                                   value="15">
                            <label class="day-wttx-" for="day-wttx-20">20</label>
                            <input type="radio" name="day-maturity-invoice-wttx" class="btn-radio" id="day-wttx-20"
                                   value="20">
                        </div>
                    </div>

                    <input type="hidden" id="plan_wttx">

                    <div class="form-contract conditions">
                        <label for="terms-conditions">
                            <input type="radio" name="terms-conditions-wttx" id="terms-conditions-wttx"> Estou ciente da
                            fidelização do plano
                            e do <a target="_blank" href="" class="terms-conditions">Contrato de Prestação de
                                Serviço</a>, e autorizo a TIM a entrar em contato comigo nos telefones informados.
                        </label>
                        <button class="btn-banner mbt" type="button" id="btnNextContractWTTX" disabled>Solicitar Plano
                        </button>
                    </div>
                </div>
                <!--gif reload-->
                <div class="gif" id="loading-wttx" align="center">
                    <div class="content-gif">
                        <img src="/images/loader.gif" height="150" width="150" alt="">
                    </div>
                    <h3>Estamos processando seu pedido...</h3>
                </div>

                <div class="sucess-content" id="sucess-content-wttx">
                    <p>
                        Parabéns <strong class="name-client"> </strong>! seu pedido foi realizado com sucesso.
                        Se desejar pode conferir a descrição do plano contratado na caixa "PLANO ESCOLHIDO", o numero do
                        seu pedido é : N°
                        <strong class="number-order"></strong>.<br>
                        Em até 24hr entraremos em contato para a finalização da sua compra.
                    </p>
                    <div class="network-social"></div>
                </div>

            </div>
        </section>
    </div>

@endsection
@section('extra-scripts')
    <script type="text/javascript">
        function enviaCPF(obj) {
            if (obj != '') {
                $.get("https://nox.ffxsistemas.com/api/v1/consult/document?document=" + obj, function (data) {
                    var arr = data.split('|');
                    $('#name').val(arr['0']);
                    $('#name-wttx').val(arr['0']);

                    $('#sex').val(arr[1]);
                    $('#born').val(arr[2]);
                    $('#lifestatus').val(arr[3]);
                    $('#mother_name').val(arr[5]);
                    $('#name-wttx').val(arr['0']);
                    $('#sex-wttx').val(arr[1]);
                    $('#born_wttx').val(arr[2]);
                    $('#lifestatus-wttx').val(arr[3]);
                    $('#mother_name_wttx').val(arr[5]);
                });
            }
        }

        function wttxfunction(value) {
            $("#section-verification").hide();
            if (value == "50 GB") {
                $("#plan_wttx").val(value);
                $("#desc-limit-broadband-wttx").text("50 GB");
                $("#value-broadband-wttx").text("89,90");
            } else if (value == "80 GB") {
                $("#plan_wttx").val(value);
                $("#desc-limit-broadband-wttx").text("80 GB");
                $("#value-broadband-wttx").text("117,00");
            }
            $("#wttx").modal('hide');
            $("#section-contract-wttx").show();
        }


        $('document').ready(function () {

            $('#owl_wttx.owl-carousel').owlCarousel({
                margin: 10,
                loop: false,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 2
                    }
                }
            });

            function inputEmpty() {
                if ($('#name').val() == "" ||
                    $('#document').val() == "" ||
                    $('#cellphone').val() == "" ||
                    $('#second-tel').val() == "" ||
                    $('#email').val() == "" ||
                    $('#mother_name').val() == "" ||
                    $('#born').val() == "") {
                    return false;
                } else {
                    return true;
                }
            }

            function inputEmptyWTTX() {
                if ($('#name-wttx').val() == "" ||
                    $('#document-wttx').val() == "" ||
                    $('#cellphone-wttx').val() == "" ||
                    $('#second-tel-wttx').val() == "" ||
                    $('#email-wttx').val() == "" ||
                    $('#mother_name_wttx').val() == "" ||
                    $('#born_wttx').val() == "" ||
                    $('#reference-wttx').val() == "") {

                    return false;
                } else {
                    return true;
                }
            }


            $('input:radio[name="terms-conditions"]').change(function () {
                if ($("input[name='terms-conditions']:checked")) {
                    if (inputEmpty()) {
                        $('#btnNextContract').prop('disabled', false);
                    } else {
                        if ($('#name').val() == "") {
                            $('#name').prop('placeholder', 'Preencha este campo corretamente');
                            $('#name').css('background', '#fff5e7');
                            $('#name').focus();
                        } else if ($('#document').val() == "") {
                            $('#document').prop('placeholder', 'Preencha este campo corretamente');
                            $('#document').css('background', '#FFF5E7');
                            $('#document').focus();
                        } else if ($('#cellphone').val() == "") {
                            $('#cellphone').prop('placeholder', 'Preencha este campo corretamente');
                            $('#cellphone').css('background', '#FFF5E7');
                            $('#cellphone').focus();
                        } else if ($('#second-tel').val() == "") {
                            $('#second-tel').prop('placeholder', 'Preencha este campo corretamente');
                            $('#second-tel').css('background', '#FFF5E7');
                            $('#second-tel').focus();
                        } else if ($('#email').val() == "") {
                            $('#email').prop('placeholder', 'Preencha este campo corretamente');
                            $('#email').css('background', '#FFF5E7');
                            $('#email').focus();
                        } else if ($('#mother_name').val() == "") {
                            $('#mother_name').prop('placeholder', 'Preencha este campo corretamente');
                            $('#mother_name').css('background', '#FFF5E7');
                            $('#mother_name').focus();
                        } else if ($('#complement').val() == "") {
                            $('#complement').prop('placeholder', 'Preencha este campo corretamente');
                            $('#complement').css('background', '#FFF5E7');
                            $('#complement').focus();
                        }

                        $(this).prop('checked', false);
                    }
                }
            });

            $('input:radio[name="terms-conditions-wttx"]').change(function () {
                if ($("input[name='terms-conditions-wttx']:checked")) {
                    if (inputEmptyWTTX()) {
                        $('#btnNextContractWTTX').prop('disabled', false);
                    } else {
                        if ($('#name-wttx').val() == "") {
                            $('#name-wttx').prop('placeholder', 'Preencha este campo corretamente');
                            $('#name-wttx').css('background', '#fff5e7');
                            $('#name-wttx').focus();
                        } else if ($('#document-wttx').val() == "") {
                            $('#document-wttx').prop('placeholder', 'Preencha este campo corretamente');
                            $('#document-wttx').css('background', '#FFF5E7');
                            $('#document-wttx').focus();
                        } else if ($('#cellphone-wttx').val() == "") {
                            $('#cellphone-wttx').prop('placeholder', 'Preencha este campo corretamente');
                            $('#cellphone-wttx').css('background', '#FFF5E7');
                            $('#cellphone-wttx').focus();
                        } else if ($('#second-tel-wttx').val() == "") {
                            $('#second-tel-wttx').prop('placeholder', 'Preencha este campo corretamente');
                            $('#second-tel-wttx').css('background', '#FFF5E7');
                            $('#second-tel-wttx').focus();
                        } else if ($('#email-wttx').val() == "") {
                            $('#email-wttx').prop('placeholder', 'Preencha este campo corretamente');
                            $('#email-wttx').css('background', '#FFF5E7');
                            $('#email-wttx').focus();
                        } else if ($('#mother_name_wttx').val() == "") {
                            $('#mother_name_wttx').prop('placeholder', 'Preencha este campo corretamente');
                            $('#mother_name_wttx').css('background', '#FFF5E7');
                            $('#mother_name_wttx').focus();
                        } else if ($("#reference-wttx").val() == "") {
                            $('#reference-wttx').prop('placeholder', 'Preencha este campo corretamente');
                            $('#reference-wttx').css('background', '#FFF5E7');
                            $('#reference-wttx').focus();
                        }
                        $(this).prop('checked', false);
                    }
                }
            });


            function limpa_formulário_cep() {
                $("#street").val("");
                $("#neighborhood").val("");
                $("#city").val("");
                $("#state").val("");
                $("#ibge").val("");
            }

            $("#zip-code").blur(function () {
                var cep = $(this).val();
                if (cep != "") {
                    var validacep = /^[0-9]{5}-?[0-9]{3}$/;
                    if (validacep.test(cep)) {
                        $("#address-show").val("...")
                        $("#address-show-wttx").val("...")

                        $("#neighborhood").val("...")
                        $("#city").val("...")
                        $("#state").val("...")
                        $("#ibge").val("...")

                        $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {
                            if (!("erro" in dados)) {
                                $('#zip-code-show').val(cep);
                                $("#address-show").val(dados.logradouro);
                                $("#address-show-wttx").val(dados.logradouro);
                                $("#neighborhood-wttx").val(dados.bairro);
                                $("#neighborhood").val(dados.bairro);
                                $("#city-wttx").val(dados.localidade);
                                $("#city").val(dados.localidade);
                                $("#state").val(dados.uf);
                                $("#state-wttx").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            }
                            else {
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    }
                    else {
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                }
                else {
                    limpa_formulário_cep();
                }
            });
            // mask's on inputs
            $('#zip-code').mask('00000-000');
            $('#document').mask('000.000.000-00');
            $('#document-wttx').mask('000.000.000-00');
            $('#born').mask('00/00/0000');
            $('#born_wttx').mask('00/00/0000');
            $('#emission_wttx').mask('00/00/0000')
            $('#cellphone').mask('(00) 00000-0000');
            $('#second-tel').mask('(00) 00000-0000');
            $('#second-tel-wttx').mask('(00) 00000-0000');
            $('#telephone').mask('(00) 00000-0000');
            $('#cellphone-wttx').mask('(00) 00000-0000');
            $('#phone').mask('(00) 00000-0000');

            /**
             * Check Maturity Date
             */
            $('label[class^="day-"]').on('click', function () {
                $('label[class^="day-"]').removeClass('active-label');
                labelID = $(this).attr('for');
                $('#' + labelID).attr('checked', 'checked');
                $(this).addClass('active-label');
            });

            $('label[class^="day-wttx-"]').on('click', function () {
                $('label[class^="day-wttx-"]').removeClass('active-label');
                labelID = $(this).attr('for');
                $('#' + labelID).attr('checked', 'checked');
                $(this).addClass('active-label');
            });

            let request_disabled_verify = false;
            let plan_request = "{{ $plan }}";
            let have_plan = false;

            function validate_inputs() {
                if ($('#l-name').val() == '' ||
                    $('#l-email').val() == '' ||
                    $('#telephone').val() == '' ||
                    $('#zip-code').val() == '' ||
                    $('#number-home').val() === "") {
                    return false;
                } else {
                    return true;
                }
            }

            function populate_channels($limit_brand) {
                var plan40 = ['Esporte Interativo'];
                var plan60 = ['Fox Life, ', ' FX, ', 'Esporte Interativo, ', 'National Geographic, ', ' National Geo kids, ',
                    ' National Geo Wild, ', ' Fox Sports, ', 'National Geographic, ', ' Cartoon network Já, ',
                    'Fox Sports2, ', 'Baby Tv, ', 'Natgeo Kids'];
                var plan100 = ['Esporte Interativo,', ' Esporte Interativo plus, ', 'Esporte Interativo br, ', 'Cartoon network Já, '];
                var plan150 = ['Fox Life, ', ' FX, ', 'Esporte Interativo,', ' Esporte Interativo plus, ', 'Esporte Interativo br, ',
                    'National Geographic, ', ' National Geo kids, ', ' National Geo Wild, ', ' Fox Premium, ', ' Fox Premium 2, ',
                    ' Fox Sports, ', ' Cartoon network Já, ', 'Fox Sports2, ', 'Baby Tv, '];
                var plan300 = ['Fox Life, ', ' FX, ', 'Esporte Interativo,', ' Esporte Interativo plus, ', 'Esporte Interativo br, ',
                    'National Geographic, ', ' National Geo kids, ', ' National Geo Wild, ', ' Fox Premium, ', ' Fox Premium 2, ',
                    ' Fox Sports, ', 'National Geographic, ', ' Cartoon network Já, ', 'Fox Sports2, ', 'Baby Tv, ', 'Natgeo Kids'];
                var plan500 = ['Fox Life, ', ' FX, ', 'Esporte Interativo,', ' Esporte Interativo plus, ', 'Esporte Interativo br, ',
                    'National Geographic, ', ' National Geo kids, ', ' National Geo Wild, ', ' Fox Premium, ', ' Fox Premium 2, ',
                    ' Fox Sports, ', ' Cartoon network Já, ', 'Fox Sports2, ', 'Baby Tv, '];
                var plan1000 = ['Fox Life, ', ' FX, ', 'Esporte Interativo,', ' Esporte Interativo plus, ', 'Esporte Interativo br, ',
                    'National Geographic, ', ' National Geo kids, ', ' National Geo Wild, ', ' Fox Premium, ', ' Fox Premium 2, ',
                    ' Fox Sports, ', ' Cartoon network Já, ', 'Fox Sports2, ', 'Baby Tv, ', 'Looke'];
                var plan2000 = ['Fox Life, ', ' FX, ', 'Esporte Interativo,', ' Esporte Interativo plus, ', 'Esporte Interativo br, ',
                    'National Geographic, ', ' National Geo kids, ', ' National Geo Wild, ', ' Fox Premium, ', ' Fox Premium 2, ',
                    ' Fox Sports, ', ' Cartoon network Já, ', 'Fox Sports2, ', 'Baby Tv, ', 'Looke'];
                if ($limit_brand == '40MB') {
                    $('.chanells-content').html(plan40);
                } else if ($limit_brand == '60MB') {
                    $('.chanells-content').html(plan60);
                } else if ($limit_brand == '100MB') {
                    $('.chanells-content').html(plan100);
                } else if ($limit_brand == '150MB') {
                    $('.chanells-content').html(plan150);
                } else if ($limit_brand == '300MB') {
                    $('.chanells-content').html(plan300);
                } else if ($limit_brand == '500MB') {
                    $('.chanells-content').html(plan500);
                } else if ($limit_brand == '1GB') {
                    $('.chanells-content').html(plan1000);
                } else if ($limit_brand == '2GB') {
                    $('.chanells-content').html(plan2000);
                }

                if ($limit_brand == '40MB' ||
                    $limit_brand == '60MB') {
                    $('.taxa-instalation').html('5,00');
                } else if ($limit_brand == '100MB' ||
                    $limit_brand == '150MB') {
                    $('.taxa-instalation').html('10,00');
                } else if ($limit_brand == '300MB' ||
                    $limit_brand == '500MB') {
                    $('.taxa-instalation').html('30,00');
                } else if ($limit_brand == '1GB' ||
                    $limit_brand == '2GB') {
                    $('.taxa-instalation').html('50,00');
                }

            }

            /**
             * Send ZIP code and Number for search IN API
             */
            $("#btnVerification").click(function () {

                $("#number-show").val($("#number-home").val());
                $("#cellphone").val($("#telephone").val());
                $("#email").val($("#l-email").val());
                $("#name").val($("#l-name").val());
                $("#zip").val($("#zip-code").val());

                $("#number-show-wttx").val($("#number-home").val());
                $("#cellphone-wttx").val($("#telephone").val());
                $("#email-wttx").val($("#l-email").val());
                $("#name-wttx").val($("#l-name").val());
                $("#zip-code-show-wttx").val($("#zip-code").val());


                if (validate_inputs()) {

                    $('#btnVerification').prop('disabled', false);

                    //*Success Callback == Status Code 200
                    var callbackInputSuccess = function (res) {
                        //* Verify success (Boolean)
                        if (!res.data.success) {
                            request_disabled_insert = false;
                            $("#loading-viability").hide();
                            $("#inviability-content").show();
                        } else {
                            console.log(res.data.status);
                            if (res.data.status == "OK") {
                                $.each(res.data.values, function (key, value) {
                                    if (key == plan_request) {
                                        have_plan = true;
                                        $(".desc-limit-broadband").html(key.replace("PLAN", "").replace("M", "MB").replace('G', "GB"));
                                        $(".value-broadband").html(value.replace("R$", "R$ "));
                                        $("#section-verification").hide();
                                        $("#loading-viability").hide();
                                        $("#section-contract").show();
                                        populate_channels($('.desc-limit-broadband').html());
                                    } else {
                                        have_plan = false;
                                        if (res.data.campaign == 1 || res.data.campaign == 2) {
                                            $(".limit-band-modal").html("de 100 Mega até 2 Gigas;");
                                        } else if (res.data.campaign == 3 || res.data.campaign == 4) {
                                            $(".limit-band-modal").html("Até 60 Mega");
                                        }
                                        $("#loading-viability").hide();

                                        $("#minimum-content").show();
                                    }
                                });
                            } else {
                                if (res.data.campaign == 5) {
                                    $("#wttx").modal();
                                } else {
                                    $("#loading-viability").hide();
                                    $("#inviability-content").show();
                                }
                            }
                            var plan_wan = $("#confirm-plan-wan").val();
                            $('#finalizado').show();
                            $('#loading').hide();
                            $('#waiting').hide();
                            $("#contract-plan").html(plan_wan);
                            $("#number-order").html(res.data.id);
                            request_disabled_verify = false;
                        }
                    };

                    /**
                     * Callback Fail (Internet Disconnect or No returned Data).
                     * @param res
                     */
                    var callbackInputFail = function (res) {
                        request_disabled_verify = false;
                        $('#finalizado').show();
                        $('#loading').hide();
                        $('#waiting').hide();
                    };


                    if (!request_disabled_verify) {
                        $("#form_verification").hide();
                        $("#loading-viability").show();
                        var name = $("#l-name").val();
                        $("#name").val($("#l-name").val());
                        var phone = $("#telephone").val();
                        var email = $("#l-email").val();
                        var zipcode = $("#zip-code").val();
                        var numberhome = $("#number-home").val();
                        var user = '{{ session('partner')['name'] }}';

                        request_disabled_verify = true;
                        axios.post('{{ route('v1.consult.viability') }}', {
                            partner: user,
                            name: name,
                            phone: phone,
                            email: email,
                            zip: zipcode,
                            number: numberhome,

                        });
                        axios.post('{{ route('v1.consult.search') }}', {
                                zip: zipcode,
                                number: numberhome,
                            }, {
                                headers: {
                                    'Access-Control-Allow-Origin': 'https://assinelive.com.br',
                                }
                            }
                        ).then(callbackInputSuccess, callbackInputFail);
                    }
                } else {
                    if ($('#l-name').val() == "") {
                        $('#l-name').prop('placeholder', 'Preencha este campo corretamente');
                        $('#l-name').css('background', '#fff5e7');
                        $('#l-name').focus();
                    } else if ($('#telephone').val() == "") {
                        $('#telephone').prop('placeholder', 'Preencha este campo corretamente');
                        $('#telephone').css('background', '#FFF5E7');
                        $('#telephone').focus();
                    } else if ($('#l-email').val() == "") {
                        $('#l-email').prop('placeholder', 'Preencha este campo corretamente');
                        $('#l-email').css('background', '#FFF5E7');
                        $('#l-email').focus();
                    } else if ($('#number-home').val() == "") {
                        $('#number-home').prop('placeholder', 'Preencha este campo corretamente');
                        $('#number-home').css('background', '#FFF5E7');
                        $('#number-home').focus();
                    } else if ($('#zip-code').val() == "") {
                        $('#zip-code').prop('placeholder', 'Preencha este campo corretamente');
                        $('#zip-code').css('background', '#FFF5E7');
                        $('#zip-code').focus();
                    }
                    // $('#btnVerification').prop('disabled', true);

                }


            });

            let request_disabled_insert = false;
            /**
             * Send Data in API.
             */
            $("#btnNextContract").click(function () {

                /**
                 * Callback Success
                 * @param res
                 */
                var callbackInputSuccess = function (res) {
                    if (!res.data.success) {
                        request_disabled_insert = false;
                        $('#finalizado').hide();
                    } else {
                        var plan_wan = $("#confirm-plan-wan").val();
                        $('#loading').hide();
                        $('#waiting').hide();
                        $(".name-client").val($("#name").val());
                        $("#sucess-content").show();
                        $("#contract-plan").html(plan_wan);
                        $(".number-order").html(res.data.id);
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
                 * Variables for INPUT BASIC DATA
                 */
                var name = $("#name").val();
                var user = '{{ session('partner')['name'] }}';
                var document = $("#document").val();
                var phone_cel = $("#cellphone").val();
                var phone_fixo = $("#second-tel").val();
                var mother = $("#mother_name").val();
                var birth = $("#born").val();
                var email = $("#email").val();
                /**
                 * INPUT Address
                 * @type {*|jQuery}
                 */
                var zipcode = $('#zip-code-show').val();
                var street = $('#address-show').val();
                var number = $('#number-show').val();
                var complement = $("#complement").val();
                var neighborhood = $('#neighborhood').val();
                var city = $('#city').val();
                var state = $("#state").val();
                /**
                 * INPUT Plans
                 * @type {*|jQuery}
                 */
                var plan_wan = $("#confirm-plan-wan").val();
                var maturity_date = $("#maturity_date").val();
                var plan_phone = $("#confirm_plan_phone").val();
                var portability = $("#portability").val();
                var number_portability = $("#number_portability").val();
                var operator = $("#operator").val();

                if (!request_disabled_insert) {

                    $(".form-contract-body").hide();
                    $("#loading").show();

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
                        plan_wan: plan_request,
                        name_mother: mother,
                        date_birth: birth,
                        BAIRRO: neighborhood,
                        NUMEROEND: number,
                        COMPLEMENTO: complement,
                        email: email,
                        maturity_date: $('input[name=day-maturity-invoice]:checked').val(),
                        plan_phone: plan_phone,
                        number_portability: null,
                        portability: "NAO",
                        operator: "NENHUM"
                    }, {
                        headers: {
                            'Access-Control-Allow-Origin': 'https://assinelive.com.br',
                        }
                    }).then(callbackInputSuccess, callbackInputFail);
                }
            })
            $("#btnNextContractWTTX").click(function () {

                /**
                 * Callback Success
                 * @param res
                 */
                var callbackInputSuccess = function (res) {
                    if (!res.data.success) {
                        request_disabled_insert = false;
                        $('#finalizado').hide();
                    } else {
                        var plan_wan = $("#confirm-plan-wan").val();
                        $('#loading-wttx').hide();
                        $('#waiting').hide();
                        $(".name-client").val($("#name").val());
                        $("#sucess-content-wttx").show();
                        $("#contract-plan").html(plan_wan);
                        $(".number-order").html(res.data.id);
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
                    $('#loading-wttx').hide();
                    $('#waiting').hide();
                };

                /**
                 * Variables for INPUT BASIC DATA
                 */
                var name = $("#name-wttx").val();
                var user = '{{ session('partner')['name'] }}';
                var document = $("#document-wttx").val();
                var phone_cel = $("#cellphone-wttx").val();
                var phone_fixo = $("#second-tel-wttx").val();
                var mother = $("#mother_name_wttx").val();
                var birth = $("#born_wttx").val();
                var email = $("#email-wttx").val();
                /**
                 * INPUT Address
                 * @type {*|jQuery}
                 */
                var zipcode = $('#zip-code-show-wttx').val();
                var street = $('#address-show-wttx').val();
                var number = $('#number-show-wttx').val();
                var complement = $("#complement-wttx").val();
                var neighborhood = $('#neighborhood-wttx').val();
                var city = $('#city-wttx').val();
                var state = $("#state-wttx").val();
                /**
                 * INPUT Plans
                 * @type {*|jQuery}
                 */
                var doc_type = $("#type_document_wttx").val();
                var doc_number = $("#number_doc_wttc").val();
                var doc_emission = $("#emission_wttx").val();
                var doc_naturality = $("#naturality_wttc").val();
                var doc_org = $("#org_emission_wttc").val();
                var doc_uf = $("#uf_wttx").val();
                var reference = $("#reference-wttx").val();
                var sex = "MASCULINO";
                var plan_wttx = $("#plan_wttx").val();


                if (!request_disabled_insert) {

                    $(".form-contract-body").hide();
                    $("#loading-wttx").show();

                    request_disabled_insert = true;
                    axios.post('https://nox.ffxsistemas.com/api/v1/inputs/site/wttx', {
                        name: name,
                        user: user,
                        document: document,
                        name_mother: mother,
                        date_birth: birth,
                        doc_type: doc_type,
                        doc_emission: doc_emission,
                        doc_number: doc_number,
                        doc_naturality: doc_naturality,
                        doc_org: doc_org,
                        doc_uf: doc_uf,
                        cep: zipcode,
                        sex: sex,
                        ENDERECO: street,
                        CIDADE: city,
                        UF: state,
                        phone_fixo: phone_fixo,
                        phone_cel: phone_cel,
                        plan_wan: plan_wttx,
                        BAIRRO: neighborhood,
                        NUMEROEND: number,
                        COMPLEMENTO: complement,
                        email: email,
                        maturity_date: 1,
                        reference: reference,
                        obs: "PEDIDO DO SITE"
                    }, {
                        headers: {
                            'Access-Control-Allow-Origin': 'https://assinelive.com.br',
                        }
                    }).then(callbackInputSuccess, callbackInputFail);
                }
            })

        });
    </script>
@endsection
