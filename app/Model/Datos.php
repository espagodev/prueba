<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Datos extends Model
{
    protected $fillable = [
        'fecha',
        'asunto',
        'texto'
    ];
}
