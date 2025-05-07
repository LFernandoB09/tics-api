<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AtributosEgreso extends Model
{
    protected $table = 'atributos_egresos';

    protected $fillable = [
        'atributo'
    ];

    protected $hidden = ['created_at', 'updated_at'];
}
