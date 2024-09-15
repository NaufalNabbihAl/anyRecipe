<?php

namespace App\Filament\Resources;

use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Ingredients;
use Filament\Resources\Resource;
use App\Models\RecipeIngredients;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\RecipeIngredientsResource\Pages\EditRecipeIngredients;
use App\Filament\Resources\RecipeIngredientsResource\Pages\ListRecipeIngredients;
use App\Filament\Resources\RecipeIngredientsResource\Pages\CreateRecipeIngredients;


class RecipeIngredientsResource extends Resource
{
    protected static ?string $model = RecipeIngredients::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function query(Builder $query): Builder
    {
        return $query->with('recipeIngredients.ingredient');
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('recipe_id')
                    ->relationship('recipe', 'name')
                    ->required(),
                Select::make('ingredient_id') 
                    ->relationship('ingredient', 'name')
                    ->required(),
                TextInput::make('quantity')
                    ->required(),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('recipe.name')
                    ->label('Recipe'),
                TextColumn::make('ingredient.name')
                    ->label('Ingredient'),
                TextColumn::make('quantity')
                    ->label('Quantity'),
            ])
            ->filters([
                // Add any filters here if needed
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
            // Define any relations if necessary
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListRecipeIngredients::route('/'),
            'create' => CreateRecipeIngredients::route('/create'),
            'edit' => EditRecipeIngredients::route('/{record}/edit'),
        ];
    }
}
