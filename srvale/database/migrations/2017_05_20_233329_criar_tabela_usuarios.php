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

            $table->integer('tipousuario_id')->unsigned();
            $table->foreign('tipousuario_id')
                ->references('id')
                ->on('tipousuarios')
                ->onDelete('cascade');

            $table->integer('sala_id')->unsigned();
            $table->foreign('sala_id')
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
