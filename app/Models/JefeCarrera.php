<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JefeCarrera extends Model
{
    protected $table = "jefe_carreras";
    protected $fillable = [
        'nombre',
        'telefono',
        'correo',
        'posicion',
        'ubicacion',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
