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
            $table->string('id_cliente', 255);
            $table->string('prioridade', 255);
            $table->string('data_criacao', 255)();
            $table->string('descricao', 255);
            $table->string('qtd_aprovadores', 255);
            $table->string('tipo_alerta_id', 255);
            $table->string('status_alerta_id', 10);
            $table->string('usuario_idusuario', 255);
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
