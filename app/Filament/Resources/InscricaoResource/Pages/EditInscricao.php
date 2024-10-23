<?php

namespace App\Filament\Resources\InscricaoResource\Pages;

use App\Filament\Resources\InscricaoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditInscricao extends EditRecord
{
    protected static string $resource = InscricaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make('link')
                ->label('Gerar PDF')
                ->icon('heroicon-m-document')
                //->iconButton()
                ->url(fn ($record): string => route('pdf.inscricao', ['tipo' => 'prenchido','id' => $record->id]))->openUrlInNewTab(),
            Actions\DeleteAction::make(),
        ];
    }
}
