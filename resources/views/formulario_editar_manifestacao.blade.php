@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="row">
        <div class="col-lg-12">
            <div class="card-outline-{{$chamado->tipo->style}}">
                <div class="card-header"><h4 class="m-b-0 text-white">{{$chamado->tipo->descricao}}</h4></div>
                <div class="card-body">
                    <div class="row p-t-20">
                        <div class="col-md-4"><h4><b>Nome:</b> {{$chamado->nome_autor}}</h4></div>
                        <div class="col-md-3"><h4><b> Nº Protocolo: </b>{{$chamado->token}}</h4></div>
                        <div class="col-md-4"><h4><b>Tipo de Manifestação:</b> {{$chamado->tipo->descricao}}</h4></div>
                        <div class="col-md-4"><h4><b>Assunto:</b> {{$chamado->assunto->descricao}}</h4></div>
                        <div class="col-md-3"><h4><b>Data:</b> {{date("d/m/Y - H:m", strtotime($chamado->created_at))}}</h4></div>
                        <div class="col-md-3"><h4><b>Insitituição: </b>{{$chamado->instituicao->nome}}</h4></div>
                        <div class="col-md-12"><h4><b>Titulo:</b> {{$chamado->titulo}}</h4></div>
                        <div class="col-md-12"><h4><b>Relato:</b> {{$chamado->relato}}</h4></div>
                    </div>
                    <div class="card-outline-{{$chamado->status->style}}">
                        <div class="card-header"><h4 class="m-b-0 text-white">Movimentações</h4></div>
                        @foreach ($chamado->movimentacao as $mov)
                            <div class="row p-t-20">
                                <div class="col-md-3"><h6>Data: <b>{{ date("d/m/Y - H:m", strtotime($mov->created_at))}}</b></h6></div>
                                <div class="col-md-2"><h6>Status: <b>{{$mov->status->descricao}}</b></h6></div>
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
@if($chamado->status->descricao == 'Encerrado')
    <div class="row">
        <div class="col-md-12" style="text-align: center">
            <a class="btn btn-primary" href="/home" role="button"><i class="fa fa-home"></i> Inicio</a>
            <a class="btn btn-info" href="{{$chamado->id}}/imprimir" role="button"><i class="fa fa-print"></i> Imprimir</a>
        </div>
    </div>
@else
    <div class="card">
        <div class="row">
            <div class="col-lg-12">
                <div class="card-outline-{{$chamado->status->style}}">
                    <div class="card-header"><h4 class="m-b-0 text-white">Movimentações</h4></div>
                    <form action="/manifestacao/editar/{{$chamado->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />                        
                        <div class="form-body">
                            <br>
                            <div class="col-md-12">
                                <label class="control-label">Resposta</label>
                                <div class="form-group">
                                    <textarea class="form-control" name="atividade" rows="5" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <select class="form-control custom-select" required id="status_manifestacao" name="status_id">
                                        <option value="">Selecione uma opção</option>
                                        @foreach ($status as $tipo)
                                            <option value="{{$tipo->id}}">{{$tipo->descricao}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                
                            </div>
                            
                            <div class="form-actions" style="margin-left: 30px">
                                <button type="submit" class="btn_pesquisar btn btn-success"> <i class="fa fa-check"></i> Editar</button>
                                <button type="button" class="btn btn-inverse">Voltar</button>
                                <a class="btn btn-info" href="{{$chamado->token}}/imprimir" role="button"><i class="fa fa-print"></i> Imprimir</a>
                            </div>
                            <br>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endif

@endsection
