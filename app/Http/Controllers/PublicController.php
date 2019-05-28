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

class PublicController extends Controller
{
    // Retorna Resultado da Busca
    public function buscaProtocolo(){
        $protocolo = Request::all();        
        $chamado = Chamado::where('token', $protocolo['protocolo'])->first();        
        $status = Status::all();
        return view('busca_manifestacao', compact('chamado', 'status'));
    }
    
    //Retorna Formulario de Denuncia / Tipo
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
    

    // Salva Formulario de Denuncia
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
    

    // Retorna Lista de Instituições
    public function listaInstituicoes($type){
        $instituicoes = Instituicao::where('tipo_id', $type)->get();
        //dd($instituicoes);   
        return response()->json(array('instituicoes' => $instituicoes));
    }
}