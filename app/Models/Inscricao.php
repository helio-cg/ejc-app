<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    protected $fillable = [
        'nome_completo',
        'apelido'
    ];
}