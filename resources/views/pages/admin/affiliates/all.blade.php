@extends('layout.admin')
@section('content')
    <div class="page-title">
        <span class="title">Afiliados</span>
        <div class="description"></div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">

                    <div class="card-title">
                        <div class="title">
                            <button type="button" class="btn btn-info"
                                    data-toggle="modal"
                                    data-target="#createAffiliate">
                                <i class="fa fa-plus-square"></i> Adicionar Afiliado
                            </button>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    <table class="datatable table table-striped" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Codigo Site</th>
                            <th>Status</th>
                            <th>Criado em</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Codigo Site</th>
                            <th>Status</th>
                            <th>Criado em</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($affiliates as $affiliate)
                            <tr>
                                <td>{{ $affiliate->name }}</td>
                                <td>{{ $affiliate->phone }}</td>
                                <td>{{ $affiliate->code }}</td>
                                <td>{!! ($affiliate->active == 1) ? "<button class='btn btn-xs btn-success'>Ativo</button":"<button class='btn btn-xs btn-danger'>Inativo</button"  !!}</td>
                                <td>{{ $affiliate->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                        {{ $affiliates->render() }}
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade modal-info" id="createAffiliate" tabindex="-1" role="dialog"
         aria-labelledby="createAffiliate"
         aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="createAffiliate">Adicionar Afiliado</h4>
                </div>
                <div class="modal-body ">
                    <div class="alert fresh-color alert-success" role="alert" id="create-success" style="display: none">
                        <strong>Afiliado Cadastrado com sucesso!</strong>.
                    </div>
                    <div class="alert fresh-color alert-danger" role="alert" id="create-fail" style="display: none">
                        <strong>Problema ao cadastrar! Verifique sua Conexão</strong>.
                    </div>
                    <div class="alert fresh-color alert-danger" role="alert" id="create-error" style="display: none">
                        <strong>Erro ao cadastrar, entre em contato com o desenvolvedor</strong>.
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="name">Nome:</label>
                            <input type="text" class="form-control"
                                   id="name" placeholder="Marcos Santiago" style="text-transform: uppercase;">
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" style="text-transform: lowercase;" placeholder="joao@telefonica.com.br">
                        </div>

                        <div class="form-group">
                            <label for="telephone">Telefone:</label>
                            <input type="text" class="form-control" id="telephone"
                                   placeholder="Fixo ou Celular com DDD">
                        </div>

                        <div class="form-group">
                            <label for="referer">Referer:</label>
                            <input type="text" class="form-control" id="referer" pattern="^[a-zA-Z_\-]+$"
                                   placeholder="Url do Afiliado">
                            <p class="help-block">Link: https://assinelive.com.br/?ref=<sd id="refcat">usuario</sd>
                            </p>
                            <p class="help-block" id="statusreferer"></p>
                        </div>

                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-success" id="create-aff-btn" disabled>Cadastrar Afiliado</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra-scripts')
    <script type="text/javascript">
        /**
         * Mask phone Generic
         */
        var tel19o9 = function (val) {
            return val.replace(/\D/g, '').length === 10 ? '(00) 0000-0009' : '(00) 00000-0009';
        };
        $('#telephone').mask(tel19o9);
        /**
         * Function For clean escape
         */
        $(document).ready(function () {
            let referer = $("#referer");
            let createaffiliate = $("#create-aff-btn");
            function Trim(str) {
                return str.replace(/( )/ig, "");
            }
            referer.keyup(function () {
                $("#refcat").text(Trim($(this).val()));
                $("#referer").val(Trim($(this).val()));
            });
            referer.blur(function () {
                let request_disabled_verify = false;

                //*Success Callback == Status Code 200
                var callbackInputSuccess = function (res) {
                    //* Verify success (Boolean)
                    if (!res.data.success) {
                        request_disabled_verify = false;
                    } else {
                        if(!res.data.contain) {
                            $("#statusreferer").html("<font color='#008000'><b>Referer Disponível para uso.</b></font>");
                            $("#create-aff-btn").prop('disabled',false);
                        } else {
                            $("#statusreferer").html("<font color='#FF0000'><b>Esse Referer já esta em uso. </b></font>");
                            $("#create-aff-btn").prop('disabled',true);
                        }
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
                    var referrer =  $("#referer").val();
                    $("#create-aff-btn").prop('disabled',true);
                    request_disabled_verify = true;
                    axios.post('{{ route('v1.admin.consult-referrer') }}', {
                        referrer: referrer,
                    }).then(callbackInputSuccess, callbackInputFail);
                }
            });

            createaffiliate.click(function () {
                let request_disabled_create = false;

                //*Success Callback == Status Code 200
                var callbackInputSuccess = function (res) {
                    //* Verify success (Boolean)
                    if (!res.data.success) {
                        $("#create-error").show();
                        setTimeout(function () {
                            $("#createAffiliate").modal('toggle');
                            $("#show-error").hide();
                        }, 2000);
                    } else {
                        $("#create-success").show();
                        request_disabled_create = false;
                        setTimeout(function () {
                            $("#createAffiliate").modal('toggle');
                            $("#show-success").hide();
                        }, 2000);
                    }
                };

                /**
                 * Callback Fail (Internet Disconnect or No returned Data).
                 * @param res
                 */
                var callbackInputFail = function (res) {
                    request_disabled_create = false;
                    $("#create-success").fail();
                };

                if (!request_disabled_create) {
                    var name =  $("#name").val();
                    var email =  $("#email").val();
                    var phone =  $("#telephone").val();
                    var code =  $("#referer").val();

                    request_disabled_create = true;
                    axios.post('{{ route('v1.admin.create-affiliate') }}', {
                        name: name,
                        email: email,
                        phone: phone,
                        code: code
                    }).then(callbackInputSuccess, callbackInputFail);
                }
            });
        });



    </script>
@endsection
