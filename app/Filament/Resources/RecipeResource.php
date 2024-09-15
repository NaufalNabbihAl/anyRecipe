<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Recipe;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;

use App\Filament\Resources\RecipeResource\Pages;


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
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required(),
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
                    ->maxValue(60),
                Forms\Components\TextInput::make('seconds')
                    ->nullable()
                    ->numeric()
                    ->maxValue(60),
                Repeater::make('ingredients')
                    ->relationship('recipeIngredients')
                    ->schema([
                        Select::make('ingredient_id')
                            ->relationship('ingredient', 'name')
                            ->searchable()
                            ->reactive()
                            ->required(),
                        TextInput::make('quantity')
                            ->required(),
                    ])
                    ->minItems(1)
                    ->columns(2)
                    ->addActionLabel('Add Ingredient'),
                Repeater::make('steps')
                    ->relationship('steps')
                    ->schema([
                        Forms\Components\Textarea::make('description')
                            ->required(),
                    ])
                    ->minItems(1)
                    ->columns(1)
                    ->addActionLabel('Add Step'),
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
                    ->words(10),
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
