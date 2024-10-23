<?php

namespace App\Filament\Resources\EquipeResource\Pages;

use App\Filament\Resources\EquipeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEquipe extends CreateRecord
{
    protected static string $resource = EquipeResource::class;

    protected static function canViewAny(): bool
{
    return true; // Permite que qualquer um veja o recurso
}
}
