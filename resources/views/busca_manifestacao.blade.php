@extends('layouts.publico')

@section('content')
<div class="card">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-outline-{{$chamado->tipo->style}}">
                <div class="card-header"><h4 class="m-b-0 text-white">{{$chamado->tipo->descricao}}</h4></div>
                <div class="card-body">
                    <div class="row p-t-20">
                        <div class="col-md-4"><h4>Nome: <b>{{$chamado->nome_autor}}</b></h4></div>
                        <div class="col-md-3"><h4>Token: <b>{{$chamado->token}}</b></h4></div>
                        <div class="col-md-4"><h4>Tipo de Manifestação:<b> {{$chamado->tipo->descricao}}</b></h4></div>
                        <div class="col-md-4"><h4>Assunto: <b>{{$chamado->assunto->descricao}}</b></h4></div>
                        <div class="col-md-3"><h4>Data: <b>{{$chamado->created_at}}</b></h4></div>
                        <div class="col-md-3"><h4>Insitituição:<b> {{$chamado->instituicao->nome}}</b></h4></div>
                        <div class="col-md-12"><h4>Titulo: <b>{{$chamado->titulo}}</b></h4></div>
                        <div class="col-md-12"><h4>Relato: <b>{{$chamado->relato}}</b></h4></div>
                    </div>
                    <div class="card-outline-{{$chamado->status->style}}">
                        <div class="card-header"><h4 class="m-b-0 text-white">Movimentações</h4></div>
                        @foreach ($chamado->movimentacao as $mov)
                            <div class="row p-t-20">
                                <div class="col-md-3"><h6>Data: <b>{{$mov->created_at}}</b></h6></div>
                                <div class="col-md-2"><h6>Status: <b>{{$mov->status}}</b></h6></div>
                                <div class="col-md-3"><h6>Atividade: <b>{{$mov->atividade}}</b></h6></div>
                                <div class="col-md-3"><h6>Usuario: <b>{{$mov->user}}</b></h6></div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <!-- Row -->
</div>
<div class="row">
        <div class="col-md-12" style="text-align: center">
            <a class="btn btn-primary" href="/" role="button"><i class="fa fa-home"></i> Inicio</a>
        </div>
    </div>
@endsection
