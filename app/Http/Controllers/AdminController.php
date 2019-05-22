<?php

namespace App\Http\Controllers;
use App\Chamado;
use App\Instituicao;
use App\TipoInstituicao;

use Request;

class AdminController extends Controller
{
    public function listaChamados()
    {
        $chamados = Chamado::latest()->paginate();
        dd($chamados);
        return view('home', compact('chamados'));
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
            return view('formulario_denuncia', compact('tiposInstituicao', 'instituicoes', 'manifestacao'));
        }
        
        
    }
    public function manifestacaoNova() {
        $valores = Request::all();
        
        $chamado = Chamado::create($valores);
        dd($chamado);

    }
    public function listaInstituicoes($type){
        $instituicoes = Instituicao::where('tipo_id', $type)->get();
        //dd($instituicoes);   
        return response()->json(array('instituicoes' => $instituicoes));
    }
}
