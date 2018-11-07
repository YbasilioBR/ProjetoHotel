<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $table = 'tarefa';
    protected $primaryKey = 'id_tarefa';
    protected $fillable = ['descricao'];
    public $timestamps = false;

    public function quartos()
    {
      return $this->belongsToMany('App\QuartoLimpo', 'quarto_tarefas', 'id_tarefa', 'id_quartolimpo');
    }   

}

