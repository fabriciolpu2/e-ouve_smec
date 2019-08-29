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
use App\Utils\ViewInstituicoes;

class RelatorioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function exibirGrafico() {
        //dd("teste");

        $chamados = DB::select('select
        tipo."style",
        tipo.descricao,
            count(chamado.tipo_id)	
        FROM ouvidoria.tipos_chamado as tipo
        join ouvidoria.chamados as chamado on tipo.id = chamado.tipo_id 
        GROUP BY (tipo."style", tipo.descricao);');
        //dd($chamados);

        return view('admin.relatorios.grafico_chamados', compact('chamados'));
    }

    public function getChamadosGraficos() {
        $chamado = DB::unprepared('')->get();
        dd($chamado);
        return response()->json(array('chamado' => $chamado));
    }
}
