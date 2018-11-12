<?php

namespace App\Http\Controllers;

use App\QuartoTarefas;
use Illuminate\Http\Request;
use DB;
use View;

class QuartoTarefasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuartoTarefas  $quartoTarefas
     * @return \Illuminate\Http\Response
     */
    public function show($id_quarto_limpo)
    {
        if (Session::get('id_usuario') > 0){
            $quartostarefas = DB::table('quarto_tarefas')
            ->join('tarefa', 'quarto_tarefas.id_tarefa', '=', 'tarefa.id_tarefa')
            ->join('quarto_limpo', 'quarto_tarefas.id_quartolimpo', '=', 'quarto_limpo.id_quartolimpo')
            ->select(DB::raw('quarto_tarefas.id_tarefa, tarefa.descricao' ))
            ->where('quarto_tarefas.id_quartolimpo','=',$id_quarto_limpo)
            ->get();

            return View::make('QuartoTarefa.show')->with('quartostarefas', $quartostarefas);
        }else{
            return redirect()->route('pagina.login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuartoTarefas  $quartoTarefas
     * @return \Illuminate\Http\Response
     */
    public function edit(QuartoTarefas $quartoTarefas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuartoTarefas  $quartoTarefas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuartoTarefas $quartoTarefas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuartoTarefas  $quartoTarefas
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuartoTarefas $quartoTarefas)
    {
        //
    }
}
