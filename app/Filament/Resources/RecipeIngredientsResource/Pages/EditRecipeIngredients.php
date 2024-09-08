<?php

namespace App\Filament\Resources\RecipeIngredientsResource\Pages;

use App\Filament\Resources\RecipeIngredientsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRecipeIngredients extends EditRecord
{
    protected static string $resource = RecipeIngredientsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
