<?php

namespace App\Filament\Resources\EquipeConselhoDiocesanoResource\Pages;

use App\Filament\Resources\EquipeConselhoDiocesanoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEquipeConselhoDiocesanos extends ListRecords
{
    protected static string $resource = EquipeConselhoDiocesanoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\CreateAction::make(),
        ];
    }
}
