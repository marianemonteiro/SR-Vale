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
        Schema::create('rotafuga_salas', function (Blueprint $table) {
            $table->integer('rotafuga_id')->unsigned();
            $table->foreign('rotafuga_id')
                ->references('id')
                ->on('rotafugas')
                ->onDelete('cascade');

            $table->integer('sala_id')->unsigned();
            $table->foreign('sala_id')
                ->references('id')
                ->on('salas')
                ->onDelete('cascade');

            $table->primary(['rotafuga_id', 'sala_id']);
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
