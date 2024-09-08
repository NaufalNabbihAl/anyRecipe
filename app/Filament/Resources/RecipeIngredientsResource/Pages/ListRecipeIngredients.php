<?php

namespace App\Filament\Resources\RecipeIngredientsResource\Pages;

use App\Filament\Resources\RecipeIngredientsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRecipeIngredients extends ListRecords
{
    protected static string $resource = RecipeIngredientsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
