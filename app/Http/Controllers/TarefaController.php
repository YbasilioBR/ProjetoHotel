<?php

namespace App\Http\Controllers;

use App\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tarefas = Tarefa::paginate(5);
        return view('Tarefa.index', compact('tarefas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Tarefa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tarefa = new Tarefa();
        $tarefa->descricao = $request->input('descricao');
        $tarefa->save();
        return redirect('/tarefas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit($id_tarefa)
    {
        $tarefa = Tarefa::find($id_tarefa);
        if(isset($tarefa)) {
            return view('Tarefa.edit', compact('tarefa'));
        }
        return redirect('/tarefas');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tarefa)
    {
        $tarefa = Tarefa::find($id_tarefa);
        if(isset($tarefa)) {
            $tarefa->descricao = $request->input('descricao');
            $tarefa->save();
        }
        return redirect('/tarefas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_tarefa)
    {
        $tarefa = Tarefa::find($id_usuario);
        if (isset($tarefa)) {
            $tarefa->tarefa();
        }
        return redirect('/tarefas');
    }

    public function indexJson()
    {
        $tarefas = Tarefa::all();
        return json_encode($tarefas);
    }
}
