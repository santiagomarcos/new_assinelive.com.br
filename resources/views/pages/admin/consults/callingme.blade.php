@extends('layout.admin')
@section('content')
    <div class="page-title">
        <span class="title">Consulta de Viabilidade</span>
        <div class="description"></div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <table class="table table-striped" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Nome:</th>
                            <th>Telefone:</th>
                            <th>Criado em:</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Nome:</th>
                            <th>Telefone:</th>
                            <th>Criado em:</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($reports->take(10) as $report)
                            <tr>
                                <td>{{ $report->name }}</td>
                                <td>{{ $report->number_phone }}</td>
                                <td>{{ $report->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $reports->render() }}

                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra-scripts')

@endsection
