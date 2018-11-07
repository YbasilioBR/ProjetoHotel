<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuartoTarefas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quarto_tarefas', function (Blueprint $table) {
            $table->integer('id_quartoLimpo')->unsigned();
            $table->foreign('id_quartoLimpo')->references('id_quartoLimpo')->on('quarto_limpo');
            $table->integer('id_tarefa')->unsigned();
            $table->foreign('id_tarefa')->references('id_tarefa')->on('tarefa');
            $table->primary(['id_quartoLimpo', 'id_tarefa']);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quarto_tarefas');
    }
}
