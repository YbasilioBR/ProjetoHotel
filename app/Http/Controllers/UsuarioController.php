<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;
use Session;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        if (Session::get('id_usuario') > 0){
            $usuarios = Usuario::paginate(5);
            return view('Usuario.index', compact('usuarios'));
        }else{
            return view('LoginPrincipal');   
        }        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $usuario = new Usuario();
        $usuario->nome = $request->input('nome');
        $usuario->logon = $request->input('logon');
        $usuario->senha = $request->input('senha');
        $usuario->tipo = $request->input('tipo');
        $usuario->save();
        return redirect('/usuarios');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit($id_usuario)
    {
        $usuario = Usuario::find($id_usuario);
        if(isset($usuario)) {
            return view('Usuario.edit', compact('usuario'));
        }
        return redirect('/usuarios');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_usuario)
    {
        $usuario = Usuario::find($id_usuario);
        if(isset($usuario)) {
            $usuario->nome = $request->input('nome');
            $usuario->logon = $request->input('logon');
            $usuario->senha = $request->input('senha');
            $usuario->tipo = $request->input('tipo');
            $usuario->save();
        }
        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_usuario)
    {
        $usuario = Usuario::find($id_usuario);
        if (isset($usuario)) {
            $usuario->delete();
        }
        return redirect('/usuarios');
    }

    public function indexJson()
    {
        $usuarios = Usuario::all();
        return json_encode($usuarios);
    }
}
