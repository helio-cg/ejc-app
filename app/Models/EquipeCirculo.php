<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EquipeCirculo extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'equipe',
        'image',
        'casais',
        'componentes'
    ];

    protected $casts = [
        'casais' => 'array',
        'componentes' => 'array',
    ];
}
