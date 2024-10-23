<?php

namespace App\Filament\Resources\EquipeCirculoResource\Pages;

use App\Filament\Resources\EquipeCirculoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEquipeCirculo extends EditRecord
{
    protected static string $resource = EquipeCirculoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
