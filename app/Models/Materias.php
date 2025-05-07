<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materias extends Model
{
    protected $table = 'materias';

    protected $primaryKey = 'clave';
    public $incrementing = false; // Importante
    protected $keyType = 'string'; // Importante

    protected $fillable = [
        'clave',
        'nombre',
        'semestre',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
