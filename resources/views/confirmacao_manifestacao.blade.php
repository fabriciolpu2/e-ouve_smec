@extends('layouts.publico')

@section('content')

<div class="row">
    <div>
        <div class="col-12 m-t-30">
            <h2  class="m-b-0">Protocolo para acompanhamento da manifestação({{$chamado->tipo->descricao}}) <p><b>{{$chamado->token}}</b></h2>
            <div style="text-align: left" >
                <h4 class="m-b-0">Nome: <b>{{$chamado->nome_autor}}</b></h4>
                <h4 class="m-b-0">Instituição: <b>{{$chamado->instituicao->nome}}</b></h4>
                <h4 class="m-b-0">Natureza da ocorrência: <b>{{$chamado->assunto->descricao}}</b></h4>
                <h4 class="m-b-0">Data da ocorrência: <b>{{$chamado->data_relato = date("d/m/Y")}}</b></h4>
                <h4 class="m-b-0">Titulo: <b>{{$chamado->titulo}}</b></h4>
                <h4 class="m-b-0">Relato: <b>{{$chamado->relato}}</b></h4>
            </div>            
        </div>        
        
    </div>    
</div>
<div class="row">
    <div class="col-12 m-t-30">
        <a class="btn btn-primary" href="/" role="button"><i class="fa fa-home"></i> Inicio</a>
    </div>
</div>
@endsection
