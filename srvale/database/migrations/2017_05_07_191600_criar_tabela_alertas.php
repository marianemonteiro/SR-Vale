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


            $table->integer('tipo_alerta_id')->unsigned();
            $table->foreign('tipo_alerta_id')
                ->references('id')
                ->on('tipos_alertas')
                ->onDelete('cascade');

            $table->integer('status_alerta_id')->unsigned();
            $table->foreign('status_alerta_id')
                ->references('id')
                ->on('status_alertas')
                ->onDelete('cascade');

            $table->integer('usuario_idusuario')->unsigned();
            $table->foreign('usuario_idusuario')
                ->references('id')
                ->on('usuarios')
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
        Schema::dropIfExists('alertas');
    }
}
