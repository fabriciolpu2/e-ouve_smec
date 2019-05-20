<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMidiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ouvidoria.midias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('url');
            $table->string('arquivo');
            $table->unsignedInteger('chamado_id');
            $table->timestamps();
            

            $table->foreign('chamado_id')->references('id')->on('ouvidoria.chamados')->onDelete('cascade');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ouvidoria.midias');
    }
}
