<?php

namespace App\Filament\Equipe\Resources\EquipeResource\Pages;

use App\Filament\Equipe\Resources\EquipeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEquipes extends ListRecords
{
    protected static string $resource = EquipeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
