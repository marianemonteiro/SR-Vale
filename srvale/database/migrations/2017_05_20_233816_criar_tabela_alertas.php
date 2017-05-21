<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaAlertas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alertas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente');
            $table->integer('prioridade');
            $table->date('data_criacao');
            $table->string('descricao', 132);
            $table->integer('qtd_aprovadores');


            $table->integer('tipoalerta_id')->unsigned();
            $table->foreign('tipoalerta_id')
                ->references('id')
                ->on('tipoalertas')
                ->onDelete('cascade');

            $table->integer('statusalerta_id')->unsigned();
            $table->foreign('statusalerta_id')
                ->references('id')
                ->on('statusalertas')
                ->onDelete('cascade');

            $table->integer('usuario_id')->unsigned();
            $table->foreign('usuario_id')
                ->references('id')
                ->on('usuarios')
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
        Schema::dropIfExists('alertas');
    }
}
