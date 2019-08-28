@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive">
                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nome</th>
                                <th>Unidades</th>
                            </tr>
                        </thead>
                        <tbody class="tabela_manifestacoes">
                            @foreach ($tipoInstituicoes as $i)
                                <tr>
                                    <td>{{$i->id}}</td>
                                    <td>{{$i->descricao}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/admin/relatorios/instituicoes/{{$i->id}}" role="button"><i class="fa fa-search"></i> Visualizar</a>
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="text-right">
                                        <ul class="pagination"> </ul>
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>
</div>
<!-- Row -->
@endsection
