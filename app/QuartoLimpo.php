<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuartoLimpo extends Model
{

    protected $table = 'usuario';
    protected $fillable = ['numeroQuarto','id_usuario','dataInicio','dataFim'];
    public $timestamps = false;

}
