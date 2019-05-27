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
            $table->string('titulo')->nullable();            
            $table->text('relato')->nullable();
            $table->string('nome_autor')->default("Anonimo");
            $table->string('token')->unique();
            $table->date('data_relato')->nullable();
            $table->unsignedInteger('tipo_id')->nullable();
            $table->unsignedInteger('instituicao_id')->nullable();
            $table->unsignedInteger('assunto_id');
            $table->unsignedInteger('status_id')->nullable();
            
            $table->foreign('tipo_id')
                ->references('id')
                ->on('ouvidoria.tipos_chamado')
                ->onDelete('cascade');
            
            $table->foreign('instituicao_id')
                ->references('id')
                ->on('ouvidoria.instituicoes')
                ->onDelete('cascade');
            $table->foreign('assunto_id')
                ->references('id')
                ->on('ouvidoria.tipos_assunto')
                ->onDelete('cascade');

            $table->foreign('status_id')
                ->references('id')
                ->on('ouvidoria.status')
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
