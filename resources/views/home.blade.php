@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><button type="button" class="btn btn-info btn-rounded" data-toggle="modal" data-target="#add-contact">Add Manifestação</button></h4>
                
                <h6 class="card-subtitle"></h6>
                <div class="table-responsive">
                    <table id="demo-foo-addrow" class="table m-t-30 table-hover contact-list" data-page-size="10">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Autor</th>
                                <th>Tipo</th>
                                <th>Insitituição</th>
                                <th>Token</th>
                                <th>Status</th>
                                <th>Data</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="tabela_manifestacoes">
                            @foreach ($chamados as $c)                                                        
                                <tr>
                                    <td>{{$c->id}}</td>                                    
                                    <td>{{$c->nome_autor}}</td>
                                    <td><span class="label label-{{$c->tipo->style}}">{{$c->tipo->descricao}}</span> </td>
                                    <td>{{$c->instituicao->nome}}</td>
                                    <td>{{$c->token}}</td>
                                    <td><span class="label label-{{$c->status->style}}">{{$c->status->descricao}}</span> </td>
                                    <td>{{$c->created_at}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="/manifestacao/visualizar/{{$c->id}}" role="button"><i class="fa fa-search"></i> Visualizar</a>                                        
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                @include('modal_add_manifestacao')
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
