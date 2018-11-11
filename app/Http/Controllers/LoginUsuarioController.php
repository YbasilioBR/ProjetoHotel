<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE DB;

class LoginUsuarioController extends Controller
{
    public function index()    {

        return view('LoginPrincipal');
    }

    public function ValidarLogin(Request $request)
    {
        $usuario = $request->input('logon');
        $senha = $request->input('senha');

        $usuario = DB::table('usuario')->where('logon', $usuario )->where('senha', $senha)->first();

        if(isset($usuario)) {
           return view('Principal');
        }else{
            echo "Deu Ruim!";
        }        

    }
}
