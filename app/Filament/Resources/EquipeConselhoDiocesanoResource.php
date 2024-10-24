<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Equipe;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Split;
use Filament\Forms\Components\Section;
use Filament\Support\Enums\FontWeight;
use App\Models\EquipeConselhoDiocesano;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
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
