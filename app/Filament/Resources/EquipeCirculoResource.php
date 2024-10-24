<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EquipeCirculoResource\Pages;
use App\Filament\Resources\EquipeCirculoResource\RelationManagers;
use App\Models\EquipeCirculo;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class EquipeCirculoResource extends Resource
{
    protected static ?string $model = EquipeCirculo::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Grupo de Círculos';
    protected static ?int $navigationSort = 3;

    protected static ?string $modelLabel = 'Equipes de Círculos';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEquipeCirculos::route('/'),
            'create' => Pages\CreateEquipeCirculo::route('/create'),
            'edit' => Pages\EditEquipeCirculo::route('/{record}/edit'),
        ];
    }
}
