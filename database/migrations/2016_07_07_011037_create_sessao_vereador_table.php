<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessaoVereadorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessao_vereador', function (Blueprint $table) {
            $table->integer('sessao_id')->unsigned();
            $table->foreign('sessao_id')->references('id')->on('sessao');
            $table->integer('vereador_id')->unsigned();
            $table->foreign('vereador_id')->references('id')->on('vereador');
            $table->timestamps();
            $table->primary(array('sessao_id','vereador_id'));
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
