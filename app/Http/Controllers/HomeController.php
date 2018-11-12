<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if (Session::get('id_usuario') > 0){
            return view('Principal');
        }else{
            return redirect()->route('pagina.login');
        }
        
    }
}
