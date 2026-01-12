<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\CatalogResource\Pages;
use App\Filament\Admin\Resources\CatalogResource\RelationManagers;
use App\Models\Catalog;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CatalogResource extends Resource
{
    protected static ?string $model = Catalog::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

  public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Basic Data')
                    ->schema([
                        Forms\Components\FileUpload::make('img')
                            ->image()
                            ->directory('catalogs')
                            ->required(),

                        Forms\Components\TextInput::make('title_uz')->required(),
                        Forms\Components\TextInput::make('title_ru')->required(),
                        Forms\Components\TextInput::make('title_en')->required(),

                        Forms\Components\TextInput::make('slug_uz')->required(),
                        Forms\Components\TextInput::make('slug_ru')->required(),
                        Forms\Components\TextInput::make('slug_en')->required(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Texts')
                    ->schema([
                        Forms\Components\RichEditor::make('text_uz')->required(),
                        Forms\Components\RichEditor::make('text_ru')->required(),
                        Forms\Components\RichEditor::make('text_en')->required(),
                    ])
                    ->columns(1),

                Forms\Components\Section::make('Usage')
                    ->schema([
                        Forms\Components\RichEditor::make('usage_uz')->required(),
                        Forms\Components\RichEditor::make('usage_ru')->required(),
                        Forms\Components\RichEditor::make('usage_en')->required(),
                    ])
                    ->columns(1),

                Forms\Components\Section::make('Advantages')
                    ->schema([
                        Forms\Components\RichEditor::make('advantages_uz')->required(),
                        Forms\Components\RichEditor::make('advantages_ru')->required(),
                        Forms\Components\RichEditor::make('advantages_en')->required(),
                    ])
                    ->columns(1),

                Forms\Components\Section::make('Specs (JSON)')
                    ->schema([
                        Forms\Components\Repeater::make('specs')
                            ->schema([
                                Forms\Components\TextInput::make('key')->label('Name'),
                                Forms\Components\TextInput::make('value')->label('Value'),
                            ])
                            ->collapsible()
                            ->default([])
                            ->columnSpanFull(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('img')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title_uz')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title_ru')
                    ->searchable(),
                Tables\Columns\TextColumn::make('title_en')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug_uz')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug_ru')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug_en')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListCatalogs::route('/'),
            'create' => Pages\CreateCatalog::route('/create'),
            'edit' => Pages\EditCatalog::route('/{record}/edit'),
        ];
    }
}
