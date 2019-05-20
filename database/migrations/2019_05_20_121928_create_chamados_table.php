<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ouvidoria.chamados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo');
            $table->text('relato');
            $table->string('nome_autor');
            
            $table->unsignedInteger('tipo_id');
            $table->unsignedInteger('instituicao_id');
            
            $table->foreign('tipo_id')
                ->references('id')
                ->on('ouvidoria.tipos_chamado')
                ->onDelete('cascade');
            
                $table->foreign('instituicao_id')
                ->references('id')
                ->on('ouvidoria.instituicoes')
                ->onDelete('cascade');


            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ouvidoria.chamados');
    }
}
