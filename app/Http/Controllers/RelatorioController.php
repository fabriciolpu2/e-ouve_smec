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
use PHPUnit\Framework\MockObject\Builder\Match;
use App\Utils\ViewInstituicoes;

class RelatorioController extends Controller
{
    // function getRandomColor() {
    //     var letters = '0123456789ABCDEF';
    //     var color = '#';
    //     for (var i = 0; i < 6; i++) {
    //         color += letters[Math.floor(Math.random() * 16)];
    //     }
    //     return color;
    //     }
        
    public function getRandomColor() {
        $letras = ['0','1','2','3','4','5','6','7','8','9', 'A', 'B','C','D','E','F'];
        $cor = '#';
        for ($i = 0; $i < 6; $i++) {
            $cor .= $letras[rand(0,15)];
        }
        return $cor;
    }
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
        $chamados = DB::select('select
        tipo."style",
        tipo.descricao,
            count(chamado.tipo_id)	
        FROM ouvidoria.tipos_chamado as tipo
        join ouvidoria.chamados as chamado on tipo.id = chamado.tipo_id 
        GROUP BY (tipo."style", tipo.descricao);');

        $pie = [];
        foreach ($chamados as $c) {
            $chamadoPie = [];
            $chamadoPie = ['label'=> $c->descricao, 'data' => $c->count, 'color' => $this->getRandomColor()];
            array_push($pie, $chamadoPie);

            
            
        }
        $instituicoes = ViewInstituicoes::where('tipo_id', 1)->get();
        
        $escolasMunicipais = ['titulo'=> 'Escolas Municipais'];
        foreach ($instituicoes as $i) {
            array_push($escolasMunicipais, $i->nome = $i->qtd_chamados );
        }

        //dd($escolasMunicipais);

        return response()->json(array('chamado' => $pie, 'escolasMunicipais' => $escolasMunicipais));
    }
}
