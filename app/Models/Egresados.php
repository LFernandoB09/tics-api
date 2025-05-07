<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Egresados extends Model
{
    protected $table = "egresados";

    protected $fillable = [
        'nombre',
        'especialidad',
        'empresa',
        'puesto',
        'correo',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
