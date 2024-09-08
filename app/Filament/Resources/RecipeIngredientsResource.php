<?php

namespace App\Filament\Resources;

use Filament\Tables;
use App\Models\Recipe;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\Ingredients;
use Filament\Resources\Resource;
use App\Models\RecipeIngredients;
use Illuminate\Support\Facades\Log;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Repeater;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use App\Filament\Resources\RecipeIngredientsResource\Pages\CreateRecipeIngredients;
use App\Filament\Resources\RecipeIngredientsResource\Pages\ListRecipeIngredients;
use App\Filament\Resources\RecipeIngredientsResource\Pages\EditRecipeIngredients;


class RecipeIngredientsResource extends Resource
{
    protected static ?string $model = RecipeIngredients::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('recipe_id')
                    ->relationship('recipe', 'name')
                    ->required(),
                Repeater::make('recipe_ingredients')
                    ->schema([
                        Select::make('ingredient_id')
                            ->options(Ingredients::all()->pluck('name', 'id'))
                            ->default(755)
                            ->reactive()
                            ->name('ingredient_id')
                            ->required(),
                        TextInput::make('quantity')
                            ->required(),
                    ])
                    ->minItems(1)
                    ->columns(2)
                    ->saveRelationshipsUsing(function (Model $record, array $state) {

                        dd($record, $state);
                        // $record->recipeIngredients()->createMany(
                        //     collect($state)->map(function ($item) {
                        //         return [
                        //             'ingredient_id' => $item['ingredient_id'], // Explicitly set ingredient_id
                        //             'quantity' => $item['quantity'],
                        //         ];
                        //     })
                        // );

                        $record->recipeIngredients()->create([
                            'ingredient_id' => $state[0]['ingredient_id'], // Accessing the first ingredient
                            'quantity' => $state[0]['quantity'],
                        ]);
                    }),
            ]);
    }

    // Mutate the form data before saving
    public static function mutateFormDataBeforeSave(array $data): array
    {
        Log::info('Form data:', $data);

        $recipeIngredientsData = $data['recipe_ingredients'] ?? [];
        $recipeId = $data['recipe_id'] ?? null;
        unset($data['recipe_ingredients']);

        foreach ($recipeIngredientsData as $ingredientData) {
            Log::info('Processing ingredient data:', $ingredientData);

            // Add validation or default ingredient ID handling here
            if (empty($ingredientData['ingredient_id'])) {
                // Handle the missing ingredient ID case
                continue; // Skip creating this record
                // OR 
                // $ingredientData['ingredient_id'] = 1; // Provide a default ingredient ID
            }

            if (!empty($ingredientData['ingredient_id']) && !empty($ingredientData['quantity'])) {
                RecipeIngredients::updateOrCreate(
                    [
                        'recipe_id' => $recipeId,
                        'ingredient_id' => $ingredientData['ingredient_id']
                    ],
                    ['quantity' => $ingredientData['quantity']]
                );
            }
        }

        return $data;
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([])
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
