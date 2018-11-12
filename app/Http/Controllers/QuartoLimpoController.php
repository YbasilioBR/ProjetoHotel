<?php

namespace App\Http\Controllers;

use App\QuartoLimpo;
use App\Usuario;
use Illuminate\Http\Request;

class QuartoLimpoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Session::get('id_usuario') > 0){
            $quartos = QuartoLimpo::paginate(5);     
            return view('QuartoLimpo.index', compact('quartos'));
        }else{
            return redirect()->route('pagina.login');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        
        if (Session::get('id_usuario') > 0){
            return view('QuartoLimpo.create');
        }else{
            return redirect()->route('pagina.login');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quarto = new QuartoLimpo();
        $quarto->numeroQuarto = $request->input('numeroQuarto');
        $quarto->id_usuario = $request->input('id_usuario');
        $quarto->dataInicio = $request->input('dataInicio');
        $quarto->dataFim = $request->input('dataFim');
        $tarefas = $request->all('tarefas');
        $quarto->save();

        foreach($tarefas as $key => $value){
            $quarto->tarefas()->attach($value);
        }
        
       return redirect('/quartos');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuartoLimpo  $quartoLimpo
     * @return \Illuminate\Http\Response
     */
    public function show(QuartoLimpo $quartoLimpo)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuartoLimpo  $quartoLimpo
     * @return \Illuminate\Http\Response
     */
    public function edit(QuartoLimpo $quartoLimpo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuartoLimpo  $quartoLimpo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuartoLimpo $quartoLimpo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuartoLimpo  $quartoLimpo
     * @return \Illuminate\Http\Response
     */
    public function destroy(QuartoLimpo $quartoLimpo)
    {
        //
    }
}
