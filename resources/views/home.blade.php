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
                                <th>Titulo</th>
                                <th>Data</th>                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($chamados as $c)                                                        
                                <tr>
                                    <td>{{$c->id}}</td>                                    
                                    <td>{{$c->nome_autor}}</td>
                                    <td><span class="label label-{{$c->tipo->style}}">{{$c->tipo->descricao}}</span> </td>
                                    <td>{{$c->instituicao->nome}}</td>
                                    <td>{{$c->token}}</td>
                                    <td>{{$c->titulo}}</td>
                                    <td>{{$c->created_at}}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
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
