<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 255);
            $table->string('email', 120);
            $table->string('cpf', 11);
            $table->string('senha', 50);
            $table->integer('bloqueado');

            $table->integer('tipo_usuario_id')->unsigned();
            $table->foreign('tipo_usuario_id')
                ->references('id')
                ->on('tipos_usuarios')
                ->onDelete('cascade');

            $table->integer('idsala')->unsigned();
            $table->foreign('idsala')
                ->references('id')
                ->on('salas')
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
        Schema::dropIfExists('usuarios');
    }
}
