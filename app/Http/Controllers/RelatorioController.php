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

    public function listaTipoInstituicoes(){
        $tipoInstituicoes = TipoInstituicao::all();
        //dd($tipoInstituicoes);
        return view ('admin.relatorios.tipo_instituicoes', compact('tipoInstituicoes'));
    }
    public function relatorioListaInstituicoes($id){
        $instituicoes = ViewInstituicoes::where('tipo_id', $id)->get();

        //chamados_instituicoes_view
        ($instituicoes);
        return view('admin.instituicoes.instituicoes', compact('instituicoes'));
    }
}
