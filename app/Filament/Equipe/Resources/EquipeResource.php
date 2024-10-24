<?php

namespace App\Filament\Equipe\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Equipe;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ToggleButtons;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Equipe\Resources\EquipeResource\Pages;
use App\Filament\Equipe\Resources\EquipeResource\RelationManagers;

class EquipeResource extends Resource
{
    protected static ?string $model = Equipe::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $modelLabel = 'Equipes de Trabalho';
    protected static ?string $navigationLabel = 'Equipes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Split::make([
                    Section::make([
                        TextInput::make('equipe')
                        ->disabled(static fn ($record) => $record !== null)
                        ->required(),
                        ToggleButtons::make('tipo')
                            ->options([
                                '1' => 'Equipe de Trabalhos',
                                '2' => 'Equipe Dirigente',
                                '3' => 'Coordenado Geral',
                                '4' => 'Diosesano'
                            ])
                            ->hidden()
                            ->inline()
                            ->disabled(static fn ($record) => $record !== null)
                            ->required()
                    ]),
                    Section::make([
                        FileUpload::make('image')
                        ->image()
                        ->imageEditorAspectRatios([
                            '1:1',
                        ])
                        ->required(),
                    ]),
                ])->from('md')->columnSpanFull(),

            Section::make('Jovens Coordenador')
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

                Section::make('Casal Coordenador')
                ->description('Prevent abuse by limiting the number of requests per period')
                ->collapsible()
                ->persistCollapsed()
                ->schema([
                    Repeater::make('casais')
                    ->label('')
                    ->schema([
                        TextInput::make('nome')->columnSpan(2)->required(),
                        TextInput::make('endereco')->columnSpan(2)->required(),
                        DatePicker::make('nacimento')
                            ->label('Data de Casamento')->format('d/m/Y')->required(),
                        TextInput::make('telefone')
                            ->label('Número com DDD')
                            ->required(),
                    ])
                    ->columns(6)
                ]),
            Section::make('Componentes Encontreiros')
                ->description('Prevent abuse by limiting the number of requests per period')
                ->collapsible()
                ->persistCollapsed()
                ->schema([
                    Repeater::make('componentes')
                    ->label('')
                    ->schema([
                        TextInput::make('nome')->columnSpan(2)->required(),
                        TextInput::make('endereco')->columnSpan(2)->required(),
                        DatePicker::make('nacimento')
                            ->label('Data de Nascimento')->format('d/m/Y')->required(),
                        TextInput::make('telefone')
                            ->label('Número com DDD')
                            ->required(),
                    ])
                    ->columns(6)
                ]),
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
            'index' => Pages\ListEquipes::route('/'),
            'create' => Pages\CreateEquipe::route('/create'),
            'edit' => Pages\EditEquipe::route('/{record}/edit'),
        ];
    }
}
