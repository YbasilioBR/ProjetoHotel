<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;
use Session;

class RelatorioController extends Controller
{
    public function index()
    {
        if (Session::get('id_usuario') > 0){
            $relatorios = DB::table('quarto_tarefas')
                ->join('tarefa', 'quarto_tarefas.id_tarefa', '=', 'tarefa.id_tarefa')
                ->join('quarto_limpo', 'quarto_tarefas.id_quartolimpo', '=', 'quarto_limpo.id_quartolimpo')
                ->select(DB::raw('quarto_tarefas.id_tarefa, tarefa.descricao , count(quarto_tarefas.id_tarefa) as vezes,
                (HOUR(TIMEDIFF(quarto_limpo.datafim, quarto_limpo.datainicio)) / count(quarto_tarefas.id_tarefa)) as media'))
                ->groupBy('quarto_tarefas.id_tarefa') ->get();

                return View::make('Relatorio.index')->with('relatorios', $relatorios);
        }else{
            return redirect()->route('pagina.login');
        }
    }
}
