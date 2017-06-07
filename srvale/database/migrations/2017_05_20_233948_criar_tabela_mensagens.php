<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaMensagens extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensagens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('conteudo', 225);
            $table->date('data');


            $table->integer('tipomensagen_id')->unsigned();
            $table->foreign('tipomensagen_id')
                ->references('id')
                ->on('tipomensagens')
                ->onDelete('cascade');

            $table->integer('tipoalerta_id')->unsigned();
            $table->foreign('tipoalerta_id')
                ->references('id')
                ->on('tipoalertas')
                ->onDelete('cascade');

            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')
                ->references('id')
                ->on('usuarios')
                ->onDelete('cascade');

            $table->integer('alerta_id')->unsigned();
            $table->foreign('alerta_id')
                ->references('id')
                ->on('alertas')
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
        Schema::dropIfExists('mensagens');
    }
}
