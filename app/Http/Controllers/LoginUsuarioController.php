<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginUsuarioController extends Controller
{
    public function index()    {
    
        return view('LoginPrincipal');
    }

    public function ValidarLogin(Request $request)
    {
        $logon = $request->input('logon');
        $senha = $request->input('senha');

        $usuario = DB::table('usuario')->where('logon', $logon )->where('senha', $senha)->first();

        if(isset($usuario)) {
            $request->session()->put('id_usuario', $usuario->id_usuario);
            $request->session()->put('nome', $usuario->nome);
            $request->session()->put('tipo', $usuario->tipo);
            return redirect()->route('principal');
        }else{
            return redirect()->route('pagina.login');
        }        

    }

    public function Logout(Request $request){
        $request->session()->forget('id_usuario');
        $request->session()->forget('nome');
        $request->session()->forget('tipo');
        return redirect()->route('pagina.login');
    }
}
