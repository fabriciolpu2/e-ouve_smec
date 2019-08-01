<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoChamadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::unprepared('CREATE SCHEMA ouvidoria');
        Schema::create('ouvidoria.tipos_chamado', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('descricao');
            $table->string('style');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ouvidoria.tipos_chamado');
        DB::unprepared('DROP SCHEMA  IF EXISTS ouvidoria');
    }
}
