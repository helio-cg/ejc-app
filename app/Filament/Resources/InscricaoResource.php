<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InscricaoResource\Pages;
use App\Filament\Resources\InscricaoResource\RelationManagers;
use App\Models\Inscricao;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InscricaoResource extends Resource
{
    protected static ?string $model = Inscricao::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Pré Inscrição';
    protected static ?int $navigationSort = 1;

    protected static ?string $modelLabel = 'Pré Inscrição';
    protected static ?string $pluralModelLabel = 'Pré Inscrição';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nome_completo'),
                TextInput::make('apelido'),
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
            'index' => Pages\ListInscricaos::route('/'),
            'create' => Pages\CreateInscricao::route('/create'),
            'edit' => Pages\EditInscricao::route('/{record}/edit'),
        ];
    }
}
