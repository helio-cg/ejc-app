<?php

namespace App\Filament\Resources\EquipeCoordenacaoGeralResource\Pages;

use App\Filament\Resources\EquipeCoordenacaoGeralResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEquipeCoordenacaoGeral extends EditRecord
{
    protected static string $resource = EquipeCoordenacaoGeralResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\DeleteAction::make(),
        ];
    }
}
