<?php

namespace App\Filament\Resources\EquipeCoordenacaoGeralResource\Pages;

use App\Filament\Resources\EquipeCoordenacaoGeralResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEquipeCoordenacaoGerals extends ListRecords
{
    protected static string $resource = EquipeCoordenacaoGeralResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}
