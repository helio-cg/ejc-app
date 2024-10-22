<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Equipe;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\EquipeResource\Pages;
use Ysfkaya\FilamentPhoneInput\Forms\PhoneInput;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EquipeResource\RelationManagers;

class EquipeResource extends Resource
{
    protected static ?string $model = Equipe::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('equipe'),
                FileUpload::make('image'),

            Section::make('Jovens')
                ->description('Prevent abuse by limiting the number of requests per period')
                ->collapsible()
                ->persistCollapsed()
                ->schema([
                    Repeater::make('jovens')
                    ->label('')
                    ->schema([
                        TextInput::make('nome')->columnSpan(2)->required(),
                        TextInput::make('endereco')->columnSpan(2)->required(),
                        DatePicker::make('nacimento')
                            ->label('Data de Nascimento')
                            ->format('d/m/Y')->required(),
                        TextInput::make('telefone')
                            ->label('Número com DDD')
                            ->required(),
                    ])
                    ->columns(6)
                ]),

                Section::make('Casal')
                ->description('Prevent abuse by limiting the number of requests per period')
                ->collapsible()
                ->persistCollapsed()
                ->schema([
                    Repeater::make('casais')
                    ->label('')
                    ->schema([
                        TextInput::make('nome')->required(),
                        TextInput::make('endereco')->required(),
                        DatePicker::make('nacimento')
                            ->label('Data de Casamento')->format('d/m/Y')->required(),
                        TextInput::make('telefone')
                            ->label('Número com DDD')
                            ->required(),
                    ])
                    ->columns(2)
                ]),
                Section::make('Componentes')
                ->description('Prevent abuse by limiting the number of requests per period')
                ->collapsible()
                ->persistCollapsed()
                ->schema([
                    Repeater::make('componentes')
                    ->label('')
                    ->schema([
                        TextInput::make('nome')->required(),
                        TextInput::make('endereco')->required(),
                        DatePicker::make('nacimento')
                            ->label('Data de Nascimento')->format('d/m/Y')->required(),
                        TextInput::make('telefone')
                            ->label('Número com DDD')
                            ->required(),
                    ])
                    ->columns(2)
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('equipe')
            ])
            ->filters([
                //
            ])
            ->actions([

                Tables\Actions\EditAction::make()
                    ->label('Editar'),
                Tables\Actions\Action::make('link')
                    ->label('Gerar PDF')
                    ->icon('heroicon-m-document')
                    //->iconButton()
                    ->url(fn ($record): string => route('pdf.equipe', ['equipe' => $record->equipe]))->openUrlInNewTab(),
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
            'index' => Pages\ListEquipes::route('/'),
            'create' => Pages\CreateEquipe::route('/create'),
            'edit' => Pages\EditEquipe::route('/{record}/edit'),
        ];
    }
}
