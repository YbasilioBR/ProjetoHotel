<?php

namespace App;

use Illuminate\Notifications\Notifiable;

class Usuario extends Model
{

    protected $guard = 'usuario';

    protected $table = 'usuario';
    protected $guarded = ['id_usuario'];
    protected $fillable = ['nome','logon','senha','tipo'];
    public $timestamps = false;
    protected $primaryKey = 'id_usuario';

    protected $hidden = [
        'senha', 'remember_token',
    ];

}
