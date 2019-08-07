<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimentacaoChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ouvidoria.movimentacao_chamados', function (Blueprint $table) {
            $table->bigIncrements('id');            
            $table->string('user');
            $table->text('atividade');
            $table->unsignedInteger('chamado_id');
            $table->timestamps();
            $table->unsignedInteger('status_id')->nullable();

            $table->foreign('chamado_id')->references('id')->on('ouvidoria.chamados')->onDelete('cascade');
            $table->foreign('status_id')
                ->references('id')
                ->on('ouvidoria.status')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ouvidoria.movimentacao_chamados');
    }
}
