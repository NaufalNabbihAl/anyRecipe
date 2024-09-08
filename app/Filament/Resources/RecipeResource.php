<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Recipe;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Resources\Pages\Page;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Validation\ValidationException;
use App\Filament\Resources\RecipeResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RecipeResource\RelationManagers;
use Filament\Forms\Components\Repeater;

class RecipeResource extends Resource
{
    protected static ?string $model = Recipe::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(
                        [
                            'sm' => 2,
                            'xl' => 3,
                            '2xl' => 4,
                        ]
                    ),
                Forms\Components\FileUpload::make('image')
                    ->directory('recipes')
                    ->required()
                    ->columnSpan(
                        [
                            'sm' => 2,
                            'xl' => 3,
                            '2xl' => 4,
                        ]
                    )
                    ->image(),
                Forms\Components\TextInput::make('hours')
                    ->nullable()
                    ->numeric()
                    ->maxValue(24),
                Forms\Components\TextInput::make('minutes')
                    ->nullable()                    
                    ->numeric()
                    ->maxValue(60)
                    ->default(0)
                    ,
                Forms\Components\TextInput::make('seconds')
                    ->nullable()                    
                    ->numeric()
                    ->maxValue(60)
                    ->default(0),
                Repeater::make('ingredients')
                    ->addButtonLabel('Add Ingredient')
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('description')
                    ->searchable()
                    ->sortable()
                    ->words(10)
                    ,
                Tables\Columns\ImageColumn::make('image')
                    ->square()
                    ->searchable()
                    ->sortable(),
                
                
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
            'index' => Pages\ListRecipes::route('/'),
            'create' => Pages\CreateRecipe::route('/create'),
            'edit' => Pages\EditRecipe::route('/{record}/edit'),
        ];
    }
}
