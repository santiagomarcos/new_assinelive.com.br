@extends('layout.admin')
@section('content')
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a href="#">
                <div class="card red summary-inline">
                    <div class="card-body">
                        <i class="icon fa fa-inbox fa-4x"></i>
                        <div class="content">
                            <div class="title">{{ count($affiliates) }}</div>
                            <div class="sub-title">Afiliados Ativos</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a href="#">
                <div class="card yellow summary-inline">
                    <div class="card-body">
                        <i class="icon fa fa-comments fa-4x"></i>
                        <div class="content">
                            <div class="title">{{ count($access) }}</div>
                            <div class="sub-title">Novos acessos</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a href="#">
                <div class="card green summary-inline">
                    <div class="card-body">
                        <i class="icon fa fa-tags fa-4x"></i>
                        <div class="content">
                            <div class="title">{{ count($leads) }}</div>
                            <div class="sub-title">Consultas de Viabilidades</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a href="#">
                <div class="card blue summary-inline">
                    <div class="card-body">
                        <i class="icon fa fa-share-alt fa-4x"></i>
                        <div class="content">
                            <div class="title">15</div>
                            <div class="sub-title">Pedidos de Vendas</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="card card-success">
        <div class="card-header">
            <div class="card-title">
                <div class="title"><i class="fa fa-comments-o"></i> Ultimas consultas de Viabilidade:</div>
            </div>
            <div class="clear-both"></div>
        </div>
        <div class="card-body no-padding">
            <table class="table table-striped" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>Nome:</th>
                    <th>Telefone:</th>
                    <th>Email:</th>
                    <th>Cep/Num:</th>
                    <th>Criado em:</th>
                </tr>
                </thead>

                <tbody>
                @foreach($reports->take(10) as $report)
                    <tr>
                        <td>{{ $report->name }}</td>
                        <td>{{ $report->phone }}</td>
                        <td>{{ $report->email }}</td>
                        <td>{{ $report->zip }} / {{ $report->number }}</td>
                        <td>{{ $report->created_at }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <p></p>

@endsection
