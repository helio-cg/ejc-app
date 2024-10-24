<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    public $timestamps = false;
    
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
