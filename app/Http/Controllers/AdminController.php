<?php

namespace App\Http\Controllers;
use App\Chamado;
use App\Instituicao;
use App\TipoInstituicao;
use App\TipoChamado;

use Request;

class AdminController extends Controller
{
    public function listaChamados()
    {
        $chamados = Chamado::paginate();

        $tiposInstituicao = TipoInstituicao::all();
        $tipoChamado = TipoChamado::all();

        //dd($chamados);
        return view('home', compact('chamados', 'tiposInstituicao', 'tipoChamado'));
    }

    public function manifestacao($type) {
        
        $tiposInstituicao = TipoInstituicao::all();
        $instituicoes = Instituicao::where('tipo_id', 1)->get();
        $manifestacao;
        if($type == 'denuncia'){
            $manifestacao['tipo'] = 'Denuncia';
            $manifestacao['style'] = 'danger';
            $manifestacao['tipo_id'] = 1;
            
            return view('formulario_denuncia', compact('tiposInstituicao', 'instituicoes', 'manifestacao'));    
        } else if ($type == 'reclamacao') {
            $manifestacao['tipo'] = 'Reclamação';
            $manifestacao['style'] = 'warning';
            $manifestacao['tipo_id'] = 2;
            //dd($manifescao);
            return view('formulario_denuncia', compact('tiposInstituicao', 'instituicoes', 'manifestacao'));
        } else if ($type == 'sugestao') {
            $manifestacao['tipo'] = 'Sugestão';
            $manifestacao['style'] = 'info';
            $manifestacao['tipo_id'] = 3;
            return view('formulario_denuncia', compact('tiposInstituicao', 'instituicoes', 'manifestacao'));
        } else if ($type == 'elogio') {
            $manifestacao['tipo'] = 'Elogio';
            $manifestacao['style'] = 'primary';
            $manifestacao['tipo_id'] = 4;
            return view('formulario_denuncia', compact('tiposInstituicao', 'instituicoes', 'manifestacao'));
        }
        
        
    }
    public function manifestacaoNova() {
        $valores = Request::all();
        //dd($valores);
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
}
