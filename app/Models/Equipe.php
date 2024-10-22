<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    protected $fillable = [
        'equipe',
        'categoria',
        'nome',
        'endereco',
        'data',
        'telefone',
        'image'
    ];

    protected $casts = [
        'endereco' => 'array',
        'telefone' => 'array',
    ];
}
