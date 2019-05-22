@extends('layouts.publico')

@section('content')
<div class="card">
    <div class="row">
        <div class="col-lg-12">
        <div class="card card-outline-{{$manifestacao['style']}}">
                <div class="card-header">                
 
                <h4 class="m-b-0 text-white">{{$manifestacao['tipo']}}</h4>
                </div>
                <div class="card-body">
                    <form action="/manifestacao/nova" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        <input type="hidden" name="tipo_id" value="{{$manifestacao['tipo_id']}}" />
                        <div class="form-body">                           
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Nome</label>
                                        @input(['type' => 'text', 'name'=>'nome_autor', 'place'=>'Nome Completo'])
                                        <small class="form-control-feedback">Nome é opcional</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-6">
                                    <div class="form-group has-success">
                                        <label class="control-label">Instituição</label>
                                        <select class="form-control custom-select" id="tipo-instituicao" name="tipo_id">
                                            <option value="">Selecione uma opção</option>
                                            @foreach ($tiposInstituicao as $tipo)                                                
                                                <option value="{{$tipo->id}}">{{$tipo->descricao}}</option>
                                            @endforeach                                                                                            
                                        </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group has-success">
                                    <label class="control-label">Nome da Escola </label>
                                    <select class="form-control custom-select" id="instituicao" name="instituicao_id">

                                    </select>
                                </div>
                            </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Data do Evento</label>
                                        <input type="date" name="data_evento" class="form-control" placeholder="dd/mm/yyyy">
                                    </div>
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Assunto</label>
                                        @input(['type' => 'text', 'name'=>'titulo', 'place'=>''])
                                </div>
                            </div>
                            <!--/row-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">{{$manifestacao['tipo']}}</label>
                                    <textarea class="form-control" name="relato" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn_pesquisar btn btn-success"> <i class="fa fa-check"></i> Save</button>
                            <button type="button" class="btn btn-inverse">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->        
</div>
<script>

    var atualizaDados = function () {
        // $.ajax({
        //     type: 'get',
        //     url: '/instituicoes/1',
        //     dataType: "json",            
        //     success: function(data) {
        //         $.each(data.instituicoes, function(i, instituicao) {
        //             console.log(instituicao.nome)
        //             $('#instituicao').append("<option class='options_instituicoes' value='"+instituicao.id+"'>"+instituicao.nome+"</option>");
        //         });
        //     }
        // });
    }
    //$(atualizaDados);

    $('#tipo-instituicao').change(function (event) { 
        limpar();       
        event.preventDefault();  
        console.log($(this))      
        $.ajax({
            type: 'get',
            url: '/instituicoes/'+ $(this).val(),
            dataType: "json",
            success: function(data) {                
                //console.log(data)
                $.each(data.instituicoes, function(i, instituicao) {
                    console.log(instituicao.nome)
                $('#instituicao').append(
                    "<option class='options_instituicoes' value='"+instituicao.id+"'>"+instituicao.nome+"</option>"
                );
                });                
            }
        });
    });
    function limpar(){
        
        console.log("limpando")
        $('.options_instituicoes').remove()        
    }

</script>
@endsection
