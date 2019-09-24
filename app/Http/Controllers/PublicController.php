<?php

namespace App\Http\Controllers;
use App\Chamado;
use App\Instituicao;
use App\TipoInstituicao;
use App\TipoChamado;
use App\Assunto;
use App\Status;
use App\MovimentacaoChamado;
use Illuminate\Support\Facades\DB;

use Request;

class PublicController extends Controller
{
    // Retorna Resultado da Busca
    public function buscaProtocolo(){
        $protocolo = Request::all();        
        $chamado = Chamado::where('token', $protocolo['protocolo'])->first();        
        $status = Status::all();
        
        if($chamado == null){
            return redirect('/');
        }
        return view('busca_manifestacao', compact('chamado', 'status'));
    }
    
    //Retorna Formulario de Denuncia / Tipo
    public function manifestacao($type) {    
        $tiposInstituicao = TipoInstituicao::all();
        $assuntos = Assunto::all();
        $instituicoes = Instituicao::where('tipo_id', 1)->get();
        $manifestacao;
        if($type == 'denuncia'){
            $manifestacao['tipo'] = 'Denúncia';
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
        else if ($type == 'solicitacao') {
            $manifestacao['tipo'] = 'Solicitacao';
            $manifestacao['style'] = 'primary';
            $manifestacao['tipo_id'] = 5;
            return view('formulario_denuncia', compact('tiposInstituicao', 'instituicoes', 'manifestacao', 'assuntos'));
        }
        
        
    }
    

    // Salva Formulario de Denuncia
    public function manifestacaoNova() {
        $valores = Request::all();
        
        
        $valores['data_relato'] = implode('-', array_reverse(explode('/', $valores['data_relato'])));
        //dd($valores);
        $valores['status_id'] = '1';
        $token = str_random(12);
        $valores['token'] = $token;
        if(empty($valores['nome_autor'])) {
            $valores['nome_autor'] = 'Anônimo';
        }
        
        $chamado = Chamado::create($valores);
        $st = str_random(3);
        //dd($st);
        //dd($chamado);
        $numeroProtocolo = 
            $chamado['created_at'] = date("Y")
            .$chamado['created_at'] = date("m")
            .$chamado['tipo_id']
            .$chamado['id'];

        $chamado['token'] = $numeroProtocolo.'-'.$st;
        //dd($chamado['token']);
        DB::table('ouvidoria.chamados')->where('id', $chamado['id'])->update(array('token'=> $numeroProtocolo));
        //$chamado->update(['token'=> $numeroProtocolo]);
        //dd($chamado);
        //$chamado->update('token', $numeroProtocolo);
        //dd($numeroProtocolo);
        return view('confirmacao_manifestacao', compact('chamado'));

    }
    

    // Retorna Lista de Instituições
    public function listaInstituicoes($type){
        $instituicoes = Instituicao::where('tipo_id', $type)->get();
        //dd($instituicoes);   
        return response()->json(array('instituicoes' => $instituicoes));
    }
}
