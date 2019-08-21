<?php

namespace App\Http\Controllers;
use App\Chamado;
use App\Instituicao;
use App\TipoInstituicao;
use App\TipoChamado;
use App\Assunto;
use App\Status;
use App\MovimentacaoChamado;
use Auth;
use Request;
use Illuminate\Support\Facades\DB;
use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function listaChamados()
    {
        $chamados = Chamado::paginate(100);
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
    public function listaChamadosUsuario($id)
    {
        $chamados = Chamado::where('user_id', $id)->paginate();

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
        $valores['data_relato'] = implode('-', array_reverse(explode('/', $valores['data_relato'])));
        //dd($valores);
        $token = str_random(12);
        $valores['token'] = $token;
        $valores['status_id'] = '1';

        $valores['user_id'] = Auth::user()->id;
        if(empty($valores['nome_autor'])) {
            $valores['nome_autor'] = 'Anônimo';
        }
        $chamado = Chamado::create($valores);
        $numeroProtocolo = 
            $chamado['created_at'] = date("Y")
            .$chamado['created_at'] = date("m")
            .$chamado['tipo_id']
            .$chamado['id'];
        DB::table('ouvidoria.chamados')->where('id', $chamado['id'])->update(array('token'=> $numeroProtocolo));
        $chamado['token'] = $numeroProtocolo;
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
        $numeroProtocolo = 
            $chamado['created_at'] = date("Y")
            .$chamado['created_at'] = date("m")
            .$chamado['tipo_id']
            .$chamado['id'];
        DB::table('ouvidoria.chamados')->where('id', $chamado['id'])->update(array('token'=> $numeroProtocolo));
        
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
    public function imprimirManifestacao($id) {
        $chamado = Chamado::where('token','=',$id)->first();
        //dd($chamado);
        $status = Status::all();
        //dd($chamado);
        return view('admin.impressao_relato', compact('chamado', 'status'));
    }

    public function movimentarManifestacao($id){
        $valores = Request::all();
        $chamado = Chamado::find($id);
        //dd($valores);
        $chamado->update($valores);

        
        $mov['chamado_id'] = $chamado->id;
        $mov['status_id'] = $valores['status_id'];
        $mov['atividade'] = $valores['atividade'];
        
        $mov['user'] = Auth::user()->name;
        //dd($mov);
        $movimentacao = MovimentacaoChamado::create($mov);
        return redirect('/home');
    }

    public function listaUsuarios(){
        $usuarios = User::all();
        return view('admin.usuarios', compact('usuarios'));
    }
}
