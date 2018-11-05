<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $table = 'tarefa';
    protected $primaryKey = 'id_tarefa';
    protected $fillable = ['descricao'];
    public $timestamps = false;

}
