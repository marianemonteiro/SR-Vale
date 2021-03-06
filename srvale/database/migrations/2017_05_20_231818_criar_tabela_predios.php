<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaPredios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('predios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome', 120);
            $table->string('qtdandar', 45);
            $table->string('descricao', 255);

            $table->integer('pontoencontro_id')->unsigned();
            $table->foreign('pontoencontro_id')
                ->references('id')
                ->on('pontoencontros')
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
        Schema::dropIfExists('predios');
    }
}
