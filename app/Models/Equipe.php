<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $fillable = [
        'equipe',
        'image',
        'jovens',
        'casais',
        'componentes'
    ];

    protected $casts = [
        'jovens' => 'array',
        'casais' => 'array',
        'componentes' => 'array',
    ];
}
