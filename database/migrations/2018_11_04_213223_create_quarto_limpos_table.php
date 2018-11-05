<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuartoLimposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quarto_limpo', function (Blueprint $table) {
            $table->increments('id_quartolimpo');
            $table->integer('numeroQuarto');
            $table->integer('id_usuario')->unsigned();
            $table->datetime('dataInicio');
            $table->datetime('dataFim');
            $table->timestamps();
        });

        Schema::table('quarto_limpo', function($table) {
            $table->foreign('id_usuario')->references('id_usuario')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quarto_limpo');
    }
}
