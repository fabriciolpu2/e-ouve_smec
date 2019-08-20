@extends('layouts.impressao_layout')

@section('content')
<div class="">
</br>
    <div class="row p-t-20">
        <div class="col-lg-12" style="text-align: center;font-size: 20px"><b>REGISTRO DE ATENDIMENTO - OUVIDORIA</b></div>
    </br>
</br>
        <div class="col-md-12"><h3>Nº Protocolo: <b>{{$chamado->token}}</b></h3></div>
    </br>
    </div>
    <div class="row p-t-20" >
        <div class="col-md-12"><h5>Nome: <b>{{$chamado->nome_autor}}</b></h5></div>

        
        <div class="col-md-3"><h5>Tipo:<b> {{$chamado->tipo->descricao}}</b></h5></div>
        <div class="col-md-4"><h5>Data: <b>{{date("d/m/Y - H:m", strtotime($chamado->created_at))}}</b></h5></div>
        
        <div class="col-md-12"><h5>Insitituição:<b> {{$chamado->instituicao->nome}}</b></h5></div>
        <div class="col-md-12"><h4>Assunto: <b>{{$chamado->assunto->descricao}}</b></h5></div>
        <div class="col-md-12"><h4>Titulo: <b>{{$chamado->titulo}}</b></h4></div>
        </br></br>
        <div class="col-md-12"><h4 style="text-align: justify"><b>Relato: </b>{{$chamado->relato}}</h4></div>
    </div>
</br>
</br>
</br>
</br>
    <div class="row p-t-20">
        </br>
        <div class="col-lg-12" style="font-size: 20px; text-align: center"><b> MOVIMENTAÇÕES</b></div>
    
        <div class="col-md-12">
            </br>
            @foreach ($chamado->movimentacao as $mov)
                <table class="col-md-12" style="border-top: 1px solid black">
                    <tr>
                        <td><div class=""><h6><b>Data: </b>{{ date("d/m/Y - H:m", strtotime($mov->created_at))}}</h6></div></td>
                        <td><div class=""><h6><b>Status: </b>{{$mov->status->descricao}}</h6></div></td>
                        <td><div class=""><h6><b>Usuario: </b>{{$mov->user}}</h6></div></td>
                    </tr>
                    <tr>
                        <td colspan="3"><div class=""><h6><b>Atividade: </b> {{$mov->atividade}}</h6></div></td>
                    </tr>
                </table>
            </br>
            @endforeach
        </div>
    </div>
</br>
</br>
    <div>
        <div class="row p-t-20">
            <div class="col-md-6" style="text-align: center">________________________________________<p><h6>{{$chamado->nome_autor }}</h6></div>
            <div class="col-md-6" style="text-align: center">________________________________________<p><h6>{{ isset($chamado->user_id) ? $chamado->user->name : 'Registro Online'}}</h6></div>
        </div>
    </div>
</div>


@endsection