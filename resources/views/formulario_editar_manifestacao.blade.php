@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="row">
        <div class="col-lg-12">
        <div class="card card-outline-{{$chamado->tipo->style}}">
                <div class="card-header">                
 
                <h4 class="m-b-0 text-white">{{$chamado->tipo->descricao}}</h4>
                </div>
                <div class="card-body">
                    <form action="/manifestacao/editar/{{$chamado->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />                        
                        <div class="form-body">                           
                            <div class="row p-t-20">
                                <div class="col-md-12">                                 
                                    <h4>Nome: {{$chamado->nome_autor}}</h4>
                                    <h4>Token: {{$chamado->token}}</h4>                                    
                                    <h4>Tipo de Manifestação: {{$chamado->tipo->descricao}}</h4>                                
                                    <h4>Assunto: {{$chamado->assunto->descricao}}</h4>
                                    <h4>Insitituição: {{$chamado->instituicao->nome}}</h4>                                                                    
                                    <h4>Titulo: {{$chamado->titulo}}</h4>
                                    <h4>Relato: {{$chamado->relato}}</h4>                                                                                                        
                                </div>
                                <div>
                                    @foreach ($chamado->movimentacao as $mov)
                                        <h5>{{$mov->status}}</h5>
                                        <h5>{{$mov->created_at}}</h5>
                                        <h5>{{$mov->atividade}}</h5>
                                        <h5>{{$mov->user}}</h5>
                                    @endforeach                                    
                                </div>
                            </div>                        
                        </div>
                        <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="atividade" rows="5" required></textarea>
                                </div>
                        </div>
                        <select class="form-control custom-select" required id="status_manifestacao" name="status_id">
                                <option value="">Selecione uma opção</option>
                                @foreach ($status as $tipo)                                                
                                    <option value="{{$tipo->id}}">{{$tipo->descricao}}</option>
                                @endforeach                                                                                            
                        </select>
                        
                        <div class="form-actions">
                            <button type="submit" class="btn_pesquisar btn btn-success"> <i class="fa fa-check"></i> Editar</button>
                            <button type="button" class="btn btn-inverse">Voltar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->        
</div>
<script>    

</script>
@endsection
