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

use App\Tarefa;
use App\QuartoLimpo;
use App\QuartoTarefas;


Route::get('/', function () {
    return view('Principal');
});

Route::get('home', function () {
    return view('Principal');
});


Route::get('/usuarios', 'UsuarioController@index');
Route::get('/usuarios/novo', 'UsuarioController@create');
Route::post('/usuarios', 'UsuarioController@store');
Route::get('/usuarios/apagar/{id}', 'UsuarioController@destroy');
Route::get('/usuarios/editar/{id_usuario}', 'UsuarioController@edit');
Route::post('/usuarios/{id_usuario}', 'UsuarioController@update');

Route::get('/tarefas/novo', 'TarefaController@create');
Route::get('/tarefas', 'TarefaController@index');
Route::post('/tarefas', 'TarefaController@store');
Route::get('/tarefas/apagar/{id_tarefa}', 'TarefaController@destroy');
Route::get('/tarefas/editar/{id_tarefa}', 'TarefaController@edit');
Route::post('/tarefas/{id_tarefa}', 'TarefaController@update');

Route::get('/quartos', 'QuartoLimpoController@index');
Route::get('/quartos/novo', 'QuartoLimpoController@create');
Route::post('/quartos', 'QuartoLimpoController@store');
Route::get('/quartos/apagar/{id_quartolimpo}', 'QuartoLimpoController@destroy');
Route::get('/quartos/editar/{id_quartolimpo}', 'QuartoLimpoController@edit');
Route::post('/quartos/{id_quartolimpo}', 'QuartoLimpoController@update');
