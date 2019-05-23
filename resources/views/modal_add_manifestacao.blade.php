
<div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                    Adicionar Manifestação
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h4 class="modal-title" id="myModalLabel"></h4></div>
            <div class="modal-body">
                <from class="form-horizontal form-material">
                    <div class="form-group">
                        <div class="form-group has-success">
                            <select class="form-control custom-select" id="tipo-instituicao">
                                <option value="">Selecione um motivo</option>
                                @foreach ($tiposInstituicao as $tipo)                                                
                                    <option value="{{$tipo->id}}">{{$tipo->descricao}}</option>
                                @endforeach                                                                                            
                            </select>                            
                        <div class="col-md-12 m-b-20">
                            <input type="text" class="form-control" placeholder="Nome"> </div>
                        <div class="col-md-12 m-b-20">
                            <input type="text" class="form-control" placeholder="Tipo Instituicao"> </div>
                        <div class="col-md-12 m-b-20">
                            <input type="text" class="form-control" placeholder="Nome da Instituição "> </div>
                        <div class="col-md-12 m-b-20">
                            <input type="text" class="form-control" placeholder="Data"> </div>
                        <div class="col-md-12 m-b-20">
                            <input type="text" class="form-control" placeholder="Assunto"> </div>
                        <div class="col-md-12 m-b-20">
                            <input type="text" class="form-control" placeholder="Descricao"> </div>
                        
                        <div class="col-md-12 m-b-20">
                            <div class="fileupload btn btn-danger btn-rounded waves-effect waves-light"><span><i class="ion-upload m-r-5"></i>Upload Contact Image</span>
                                <input type="file" class="upload"> </div>
                        </div>
                    </div>
                </from>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<script> 

</script>