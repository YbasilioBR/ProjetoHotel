<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class MediaTarefas extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'MediaTarefas';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verifica a média de tempo gasto em tarefas do hotel';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $relatorios = DB::table('quarto_tarefas')
                ->join('tarefa', 'quarto_tarefas.id_tarefa', '=', 'tarefa.id_tarefa')
                ->join('quarto_limpo', 'quarto_tarefas.id_quartolimpo', '=', 'quarto_limpo.id_quartolimpo')
                ->select(DB::raw('quarto_tarefas.id_tarefa, tarefa.descricao , count(quarto_tarefas.id_tarefa) as vezes,
                (HOUR(TIMEDIFF(quarto_limpo.datafim, quarto_limpo.datainicio)) / count(quarto_tarefas.id_tarefa)) as media'))
                ->groupBy('quarto_tarefas.id_tarefa') ->get();
        
        foreach($relatorios as $relatorio){
            $this->info("id_tarefa: ".$relatorio->id_tarefa." Descricao: "
            .$relatorio->descricao." Media de tempo: ".$relatorio->media."");
        }
    }
}
