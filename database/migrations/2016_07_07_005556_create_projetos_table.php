<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sessao_id')->unsigned();
            $table->foreign('sessao_id')->references('id')->on('sessao');
            $table->string('nome');
            $table->string('tipo');
            $table->string('coro');
            $table->string('desc');
            $table->string('criador');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
