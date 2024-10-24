<?php

namespace App\Filament\Resources\EquipeDirigenteResource\Pages;

use App\Filament\Resources\EquipeDirigenteResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEquipeDirigente extends EditRecord
{
    protected static string $resource = EquipeDirigenteResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // Actions\DeleteAction::make(),
        ];
    }
}
