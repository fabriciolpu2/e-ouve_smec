@extends('layouts.publico')

@section('content')
<div class="card">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-outline-danger">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Denúncia</h4>
                </div>
                <div class="card-body">
                    <form action="#">
                        <div class="form-body">
                            <h3 class="card-title">Dados da Denúncia</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Nome</label>
                                        <input type="text" id="firstName" class="form-control" placeholder="Nome completo">
                                        <small class="form-control-feedback">Nome é opcional</small> </div>
                                </div>                                
                            </div>
                            <!--/row-->
                            <!--/span-->
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="control-label">Orgão</label>
                                    <div class="m-b-6">
                                        <label class="custom-control custom-radio">
                                            <input id="radio5" name="radio" type="radio" class="custom-control-input">
                                            <span class="custom-control-label">Escola Municipal</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input id="radio6" name="radio" type="radio" class="custom-control-input">
                                            <span class="custom-control-label">Casas Mãe</span>
                                        </label>
                                        <label class="custom-control custom-radio">
                                            <input id="radio6" name="radio" type="radio" class="custom-control-input">
                                            <span class="custom-control-label">SMEC</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <!--/span-->
                            <div class="row">                                
                                <div class="col-md-6">
                                    <div class="form-group has-success">
                                        <label class="control-label">Nome da Escola </label>
                                        <select class="form-control custom-select">
                                            <option value="">E.M Nome da Escola 01</option>
                                            <option value="">E.M Nome da Escola 02</option>
                                            <option value="">E.M Nome da Escola 03</option>                                            
                                        </select>
                                        <small class="form-control-feedback"> Selecione</small> </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Data do Evento</label>
                                        <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                                <!--/span-->
                            </div>
                            <!--/row-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Denúncia</label>
                                        <textarea class="form-control" rows="5"></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                            <button type="button" class="btn btn-inverse">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->        
</div>
@endsection
