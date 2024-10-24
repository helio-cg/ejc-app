<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Equipe;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Filament\Support\Enums\FontWeight;
use App\Models\EquipeConselhoDiocesano;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\ToggleButtons;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EquipeConselhoDiocesanoResource\Pages;
use App\Filament\Resources\EquipeConselhoDiocesanoResource\RelationManagers;

class EquipeConselhoDiocesanoResource extends Resource
{
    protected static ?string $model = Equipe::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Conselho Diosesano';

    protected static ?string $navigationGroup = 'Equipes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Split::make([
                    Section::make([
                        TextInput::make('equipe')
                        ->disabled(static fn ($record) => $record !== null)
                        ->required(),
                    FileUpload::make('image')
                        ->image()
                        ->imageEditorAspectRatios([
                            '1:1',
                        ])
                        ->required(),
                    ]),

                ])->from('md')->columnSpanFull(),

                Section::make('Diretor Espiritual')
                ->collapsible()
                ->persistCollapsed()
                ->schema([
                    Repeater::make('jovens')
                    ->label('')
                    ->schema([
                        TextInput::make('nome')->required(),
                        DatePicker::make('nacimento')
                            ->label('Data de Ordenação')->format('d/m/Y')->required(),
                        TextInput::make('endereco')->required(),
                        Grid::make(2)
                        ->schema([
                        TextInput::make('telefone')
                            ->label('Número com DDD')
                            ->required(),
                        ]),
                    ])->columns(3)
                ]),
                Section::make('Casais')
                ->collapsible()
                ->persistCollapsed()
                ->schema([
                    Repeater::make('casais')
                    ->label('')
                    ->schema([
                        TextInput::make('nome')->required(),
                        DatePicker::make('nacimento')
                            ->label('Data de Casamento')->format('d/m/Y')->required(),
                        TextInput::make('endereco')->required(),
                        Grid::make(2)
                        ->schema([
                        TextInput::make('telefone')
                            ->label('Número com DDD')
                            ->required(),
                        ToggleButtons::make('funcao')
                            ->grouped()
                            ->options([
                                'Casal Apoio Diocesano' => 'Casal Apoio Diocesano',
                            ])->required()
                            ]),
                    ])->columns(3)
                ]),
                Section::make('Componentes')
                ->collapsible()
                ->persistCollapsed()
                ->schema([
                    Repeater::make('componentes')
                    ->label('')
                    ->schema([
                        TextInput::make('nome')->required(),
                        DatePicker::make('nacimento')
                            ->label('Data de Nascimento')->format('d/m/Y')->required(),

                        TextInput::make('endereco')->required(),

                            TextInput::make('telefone')
                                ->label('Número com DDD')
                                ->required(),
                            ToggleButtons::make('funcao')
                            ->grouped()
                            ->options([
                                'Jovem Diocesano' => 'Jovem Diocesano',
                                'Assessor de Comunicação' => 'Assessor de Comunicação',
                                'Assessora de Secretaria' => 'Assessora de Secretaria',
                                'Assessora de Planejamento' => 'Assessora de Planejamento',
                                'Assessor de Finanças' => 'Assessor de Finanças',
                            ])->required()->columnSpanFull()


                    ])->columns(2)
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
        ->query(Equipe::query()->where('equipe','Conselho Diosesano'))
        ->defaultPaginationPageOption(25)
        ->columns([
            Tables\Columns\Layout\Split::make([
            ImageColumn::make('image')
                ->width(200)
                ->height(200),
            TextColumn::make('equipe')
                ->size(TextColumn\TextColumnSize::Large)
                ->weight(FontWeight::Bold)
                ->searchable()
            ]),
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
            'index' => Pages\ListEquipeConselhoDiocesanos::route('/'),
            'create' => Pages\CreateEquipeConselhoDiocesano::route('/create'),
            'edit' => Pages\EditEquipeConselhoDiocesano::route('/{record}/edit'),
        ];
    }
}
