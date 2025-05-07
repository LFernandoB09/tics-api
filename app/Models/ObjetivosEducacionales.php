<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ObjetivosEducacionales extends Model
{
    protected $table = 'objetivos_educacionales';

    protected $fillable = [
        'descripcion',
        'criterio',
        'indicador',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
