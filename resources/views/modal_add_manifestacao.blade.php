
<div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                    Adicionar Manifestação
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" id="myModalLabel"></h4></div>
            <div class="modal-body">
                <from class="form-horizontal form-material">
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                    <div class="form-group">
                        <div class="form-group has-success">
                            <div class="col-md-12 m-b-20">
                                <select class="form-control custom-select" id="tipo-manifestacao" name="_tipo_id" required>
                                    <option value="">Selecione um motivo</option>
                                    @foreach ($tipoChamado as $tipo)                                                
                                        <option value="{{$tipo->id}}">{{$tipo->descricao}}</option>
                                    @endforeach                                                                                            
                                </select>
                            </div>                           
                            <div class="col-md-12 m-b-20">
                                <input type="text" class="form-control" placeholder="Nome" name="nome_autor"> </div>
                            <div class="col-md-12 m-b-20">
                                <select class="form-control custom-select" id="assunto_id" name="assunto_id" required>
                                    <option value="">Natureza da Manifestação</option>
                                    @foreach ($assuntos as $tipo)                                                
                                        <option value="{{$tipo->id}}">{{$tipo->descricao}}</option>
                                    @endforeach                                                                                            
                                </select>
                            </div>
                            <div class="col-md-12 m-b-20">
                                <select class="form-control custom-select" id="tipo-instituicao" name="tipo_instituicao" required>
                                    <option value="">Tipo da Instituição</option>
                                    @foreach ($tiposInstituicao as $tipo)                                                
                                        <option value="{{$tipo->id}}">{{$tipo->descricao}}</option>
                                    @endforeach                                                                                            
                                </select>
                            </div>
                            <div class="col-md-12 m-b-20">
                                <select class="form-control custom-select" id="instituicao" name="instituicao_id" required>
                                                                                                                                
                                </select>
                            </div>                        
                            <div class="col-md-12 m-b-20">                                
                                <div class="input-group">                                        
                                        <input type="text" name="data_evento" id="data_evento" class="form-control mydatepicker" placeholder="" required>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="icon-calender"></i></span>
                                        </div>
                                    </div>
                            </div>
                            <div class="col-md-12 m-b-20">
                                <input type="text" class="form-control" placeholder="Assunto" name="titulo" required>
                            </div>
                            <div class="col-md-12 m-b-20">
                                <textarea class="form-control" name="relato" placeholder="Relato" rows="5" required></textarea>                                
                            </div>
                                                        
                        </div>
                    </div>
                </from>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect save" data-dismiss="modal">Adicionar</button>
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script>
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
    $('.modal-footer').on('click', '.save', function() {
        // console.log("Salvando");
        // console.log($('input[name=_token]').val())
        // console.log($('#tipo-manifestacao').val())
        // console.log($('input[name=nome_autor]').val())
        // console.log($('#instituicao').val())
        // console.log($('input[name=data_evento]').val())
        // console.log($('#assunto_id').val())
        // console.log($('input[name=titulo]').val())
        // console.log($('input[name=relato]').val())
        $.ajax ({
            type: 'post',
            url: '/manifestacao/create',
            data: {
                '_token': $('input[name=_token]').val(),
                'tipo_id': $('#tipo-manifestacao').val(),
                'nome_autor': $('input[name=nome_autor]').val(),
                'instituicao_id': $('#instituicao').val(),
                'assunto_id': $('#assunto_id').val(),
                'data_relato': $('input[name=data_evento]').val(),
                'titulo': $('input[name=titulo]').val(),
                'relato': $('input[name=relato]').val()              
            },
            success: function(data) {
                if(data.erros) {                    
                    alert("Erro");
                } else {    
                    //console.log(data.chamado.tipo.id)
                    alert("Nº Protocolo: "+data.chamado.token);                    
                    $('.tabela_manifestacoes').append(
                        "<tr class='id"+ data.chamado.id + "'>"+
                            "<td>"+data.chamado.id+"</td>"+
                            "<td>"+data.chamado.nome_autor+"</td>"+
                            "<td> <span class='label label-danger'>"+data.chamado.tipo_id+"</span></td>"+
                            "<td>"+data.chamado.instituicao_id+"</td>"+
                            "<td>"+data.chamado.token+"</td>"+                        
                            "<td> <span class='label label-danger'>Aberto</span></td>"+
                            "<td>"+data.chamado.created_at+"</td>"+
                            
                            "<td><a class='btn btn-primary' href='/manifestacao/visualizar/"+data.chamado.id+"' role='button'><i class='fa fa-search'></i> Visualizar</a></td>" +
                        "</tr>"
                    )
                }
            }
        })
    })

</script>