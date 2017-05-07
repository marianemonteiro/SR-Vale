<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaRotasFugasSalas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rotasfugas_salas', function (Blueprint $table) {

            $table->integer('idrotafuga')->unsigned();
            $table->foreign('idrotafuga')
                ->references('id')
                ->on('rotasfugas')
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
        Schema::dropIfExists('rotasfugas_salas');
    }
}
