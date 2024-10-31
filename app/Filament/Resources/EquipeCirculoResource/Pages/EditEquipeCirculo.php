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
           // Actions\DeleteAction::make(),
            Actions\Action::make('link')
                ->label('Gerar PDF')
                ->icon('heroicon-m-document')
                //->iconButton()
                ->url(fn ($record): string => route('pdf.circulo', ['equipe' => $record->equipe]))->openUrlInNewTab(),

        ];
    }
}
