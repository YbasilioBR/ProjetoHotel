<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('Principal');
});

Route::get('home', function () {
    return view('Principal');
});

Route::resource('tarefas', 'TarefaController');
Route::resource('tarefasCadastro', 'TarefaController');

Route::get('CadastrarUsuario', function () { 
    return view('Usuario.create'); 
});

Route::get('CadastrarTarefa' , function(){
    return view('Tarefa.create');
});

Route::get('CadastrarQuarto', function () { 

    return view('QuartoLimpo.create');
});

Route::resource('usuarios', 'UsuarioController');
Route::resource('quartos', 'QuartoLimpoController');