<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaRotafugasSalas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rotafugas_salas', function (Blueprint $table) {
            $table->integer('idrotafuga')->unsigned();
            $table->foreign('idrotafuga')
                ->references('id')
                ->on('rotafugas')
                ->onDelete('cascade');

            $table->integer('idsala')->unsigned();
            $table->foreign('idsala')
                ->references('id')
                ->on('salas')
                ->onDelete('cascade');

            $table->primary(['idrotafuga', 'idsala']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rotafugas_salas');
    }
}
