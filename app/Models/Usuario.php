<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nombre',
        'apellido',
        'usuario',
        'correo',
        'contrasena',
        'imagen',
    ];
}
