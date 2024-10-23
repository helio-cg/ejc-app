<?php

namespace App\Filament\Resources\EquipeResource\Pages;

use App\Filament\Resources\EquipeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEquipe extends EditRecord
{
    protected static string $resource = EquipeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()
            ->requiresConfirmation(),
            Actions\Action::make('link')
                ->label('Gerar PDF')
                ->icon('heroicon-m-document')
                //->iconButton()
                ->url(fn ($record): string => route('pdf.equipe', ['equipe' => $record->equipe]))->openUrlInNewTab(),
        ];
    }

    protected static function canEdit(): bool
{
    return true; // Permite que qualquer um edite
}
}
