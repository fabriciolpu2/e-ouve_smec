<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateViewListaInstituicoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('
        CREATE OR REPLACE VIEW 
            ouvidoria.chamados_instituicoes_view AS
	    SELECT
            instituicao.nome,
            instituicao.id,
	        count(instituicao) as qtd_chamados,
            instituicao.tipo_id
        FROM ouvidoria.instituicoes instituicao
            JOIN ouvidoria.chamados as c ON instituicao.id = c.instituicao_id
 	    GROUP BY (instituicao.id)
        ORDER BY instituicao.nome;
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP view IF EXISTS ouvidoria.chamados_instituicoes_view');
    }
}
