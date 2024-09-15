<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Ingredients extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function recipesIngredient(): HasMany
    {
        return $this->hasMany(RecipeIngredients::class, 'ingredient_id', 'id');
    }
}
