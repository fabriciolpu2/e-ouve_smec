@extends('layouts.admin')

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
                        </div>
                        <br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
