@extends('layouts.publico')

@section('content')
{{-- <div class="row">
        <div class="card-body col-12">
                <form action="#">
                    <div class="form-body">
                        <h3 class="card-title">Acompanhe sua manifestação</h3>
                        <hr>
                        <div class="row p-t-20">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">nº de protocolo</label>
                                    <input type="text" id="firstName" class="form-control" placeholder="">                                    
                            </div>
                        </div>                        
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-search"></i> Acompanhar</button>
                    </div>
                </form>
            </div>
</div> --}}
<div class="row">
    <div class="col-12 m-t-30">
        <h4 class="m-b-0">Card styles</h4>
        <p class="text-muted m-t-0 font-12"></p>
    </div>
    <div class="col-md-3">        
        <div class="card card-inverse card-danger" style="text-align: center">
            <a href="/manifestacao/denuncia">
                <div class="card-header">
                    <div class="m-b-0 text-white"><i class="fa fas fa-bullhorn fa-5x"></i></div>
                </div>
                <div class="card-body">
                    <h2 style="color: azure">Denúncia</h2>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-inverse card-warning" style="text-align: center">
            <a href="/manifestacao/reclamacao">
                <div class="card-header">
                    <div class="m-b-0 text-white"><i class="fa fa-thumbs-o-down fa-5x"></i></div>
                </div>
                <div class="card-body">
                    <h2 style="color: azure">Reclamação</h2>
                </div>
            </a>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card card-inverse card-info" style="text-align: center">
            <a href="/manifestacao/sugestao">
                <div class="card-header">
                    <div class="m-b-0 text-white"><i class="fa fa-comment-o fa-5x"></i></div>
                </div>
                <div class="card-body">
                    <h2 style="color: azure">Sugestão</h2>
                </div>
            </a>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card card-inverse card-primary" style="text-align: center">
            <a href="/manifestacao/elogio">
                <div class="card-header">
                    <div class="m-b-0 text-white"><i class="fa fa-thumbs-o-up fa-5x"></i></div>
                </div>
                <div class="card-body">
                    <h2 style="color: azure">Elogio</h2>
                </div>
            </a>
        </div>
    </div>
    
</div>
@endsection
