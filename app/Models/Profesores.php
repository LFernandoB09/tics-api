<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profesores extends Model
{
    //
    protected $table = "profesores";

    protected $casts = [
        'materiasImpartidas' => 'array',
    ];

    protected $fillable = [
        'nombre',
        'areasInteres',
        'materiasImpartidas',
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
