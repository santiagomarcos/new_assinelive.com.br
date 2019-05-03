@extends('layout.admin')
@section('content')
    <div class="page-title">
        <span class="title">Datatable</span>
        <div class="description">with jquery Datatable for display data with most usage functional. such as search, ajax loading, pagination, etc.</div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="card">
                <div class="card-header">

                    <div class="card-title">
                        <div class="title">Table</div>
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
                            <td>{{ ($affiliate->status) ? "Ativo":"Inativo"  }}</td>
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
@endsection
