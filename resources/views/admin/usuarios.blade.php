@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact"><b>+</b> Usuario</button></h4>
                
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive">
                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Nome</th>
                                <th>E-mail</th>
                                <th>Detalhes</th>
                            </tr>
                        </thead>
                        <tbody class="tabela_manifestacoes">
                            @foreach ($usuarios as $u)
                                <tr>
                                    <td>{{$u->id}}</td>
                                    <td>{{$u->name}}</td>
                                    <td>{{$u->email}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/manifestacoes/usuario/{{$u->id}}" role="button"><i class="fa fa-search"></i> Visualizar</a>
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
