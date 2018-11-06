<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuartoLimpo extends Model
{

    protected $table = 'quarto_limpo';
    protected $fillable = ['numeroQuarto','id_usuario','dataInicio','dataFim'];
    public $timestamps = false;

    public function usuarios()
    {
      return $this->belongsTo(Usuario::class, 'id_usuario');
    }
    
}
