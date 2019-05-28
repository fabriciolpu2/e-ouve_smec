<?php

namespace App\Http\Controllers;
use App\Chamado;
use App\Instituicao;
use App\TipoInstituicao;
use App\TipoChamado;
use App\Assunto;
use App\Status;
use App\MovimentacaoChamado;

use Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function listaChamados()
    {
        $chamados = Chamado::paginate();

        $tiposInstituicao = TipoInstituicao::all();
        $instituicoes = Instituicao::where('tipo_id', 1)->get();
        $tipoChamado = TipoChamado::all();
        $assuntos = Assunto::all();

        //dd($chamados);
        return view('home', compact('chamados', 'tiposInstituicao', 'tipoChamado', 'assuntos', 'instituicoes'));
    }
    
    public function listaChamadosType($id)
    {
        $chamados = Chamado::where('tipo_id', $id)->paginate();

        $tiposInstituicao = TipoInstituicao::all();
        $instituicoes = Instituicao::where('tipo_id', 1)->get();
        $tipoChamado = TipoChamado::all();
        $assuntos = Assunto::all();

        //dd($chamados);
        return view('home', compact('chamados', 'tiposInstituicao', 'tipoChamado', 'assuntos', 'instituicoes'));
    }

    public function listaChamadosStatus($id)
    {
        $chamados = Chamado::where('status_id', $id)->paginate();

        $tiposInstituicao = TipoInstituicao::all();
        $instituicoes = Instituicao::where('tipo_id', 1)->get();
        $tipoChamado = TipoChamado::all();
        $assuntos = Assunto::all();

        //dd($chamados);
        return view('home', compact('chamados', 'tiposInstituicao', 'tipoChamado', 'assuntos', 'instituicoes'));
    }

    public function buscaProtocolo(){
        $protocolo = Request::all();        
        $chamado = Chamado::where('token', $protocolo['protocolo'])->first();        
        $status = Status::all();
        return view('busca_manifestacao', compact('chamado', 'status'));
    }
    
    

    public function manifestacao($type) {
        
        $tiposInstituicao = TipoInstituicao::all();
        $assuntos = Assunto::all();
        $instituicoes = Instituicao::where('tipo_id', 1)->get();
        $manifestacao;
        if($type == 'denuncia'){
            $manifestacao['tipo'] = 'Denuncia';
            $manifestacao['style'] = 'danger';
            $manifestacao['tipo_id'] = 1;
            
            return view('formulario_denuncia', compact('tiposInstituicao', 'instituicoes', 'manifestacao', 'assuntos'));    
        } else if ($type == 'reclamacao') {
            $manifestacao['tipo'] = 'Reclamação';
            $manifestacao['style'] = 'warning';
            $manifestacao['tipo_id'] = 2;
            //dd($manifescao);
            return view('formulario_denuncia', compact('tiposInstituicao', 'instituicoes', 'manifestacao', 'assuntos'));
        } else if ($type == 'sugestao') {
            $manifestacao['tipo'] = 'Sugestão';
            $manifestacao['style'] = 'info';
            $manifestacao['tipo_id'] = 3;
            return view('formulario_denuncia', compact('tiposInstituicao', 'instituicoes', 'manifestacao', 'assuntos'));
        } else if ($type == 'elogio') {
            $manifestacao['tipo'] = 'Elogio';
            $manifestacao['style'] = 'primary';
            $manifestacao['tipo_id'] = 4;
            return view('formulario_denuncia', compact('tiposInstituicao', 'instituicoes', 'manifestacao', 'assuntos'));
        }
        
        
    }
    public function manifestacaoSave() {
        $valores = Request::all();
        //dd($valores);
        $token = str_random(12);
        $valores['token'] = $token;
        $valores['status_id'] = '1';
        if(empty($valores['nome_autor'])) {
            $valores['nome_autor'] = 'Anônimo';
        }
        //dd($valores);
        $chamado = Chamado::create($valores);
        //dd($chamado->tipo);
        return response()->json(array('chamado' => $chamado));
    }
    public function manifestacaoNova() {
        $valores = Request::all();
        //dd($valores);
        $valores['status_id'] = '1';
        $token = str_random(12);
        $valores['token'] = $token;
        if(empty($valores['nome_autor'])) {
            $valores['nome_autor'] = 'Anônimo';
        }
        $chamado = Chamado::create($valores);
        
        return view('confirmacao_manifestacao', compact('chamado'));

    }
    
    public function listaInstituicoes($type){
        $instituicoes = Instituicao::where('tipo_id', $type)->get();
        //dd($instituicoes);   
        return response()->json(array('instituicoes' => $instituicoes));
    }

    public function visualizarManifestacao($id){
        $chamado = Chamado::find($id);
        $status = Status::all();
        //dd($chamado);
        return view('formulario_editar_manifestacao', compact('chamado', 'status'));
    }
    public function movimentarManifestacao($id){
        $valores = Request::all();
        $chamado = Chamado::find($id);
        $chamado->update($valores);
        
        $mov['chamado_id'] = $chamado->id;
        $mov['status'] = $chamado->status->descricao;
        $mov['atividade'] = $valores['atividade'];
        $mov['user'] = 1;
        //dd($mov);
        $movimentacao = MovimentacaoChamado::create($mov);
        return redirect('/home');
    }

    
}
