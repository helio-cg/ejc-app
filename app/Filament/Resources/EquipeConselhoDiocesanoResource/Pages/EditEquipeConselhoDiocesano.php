<?php

namespace App\Filament\Resources\EquipeConselhoDiocesanoResource\Pages;

use App\Filament\Resources\EquipeConselhoDiocesanoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEquipeConselhoDiocesano extends EditRecord
{
    protected static string $resource = EquipeConselhoDiocesanoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
