<?php

namespace App\Filament\Resources\EquipeCirculoResource\Pages;

use App\Filament\Resources\EquipeCirculoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEquipeCirculos extends ListRecords
{
    protected static string $resource = EquipeCirculoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
