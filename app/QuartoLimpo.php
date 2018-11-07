<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuartoLimpo extends Model
{

    protected $table = 'quarto_limpo';
    protected $primaryKey = 'id_quartolimpo';
    protected $fillable = ['numeroQuarto','id_usuario','dataInicio','dataFim'];
    public $timestamps = false;

    public function usuarios()
    {
      return $this->belongsTo('App\Usuario', 'id_usuario');
    }

    public function tarefas()
    {
      return $this->belongsToMany('App\Tarefa', 'quarto_tarefas', 'id_quartolimpo', 'id_tarefa');
    }   
    
    
}
