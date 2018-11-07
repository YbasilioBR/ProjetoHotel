<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuario';
    protected $guarded = ['id_usuario'];
    protected $fillable = ['nome','logon','senha','tipo'];
    public $timestamps = false;
    protected $primaryKey = 'id_usuario';


}
