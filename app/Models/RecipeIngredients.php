<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RecipeIngredients extends Model
{
    use HasFactory;

    
    protected $fillable = ['recipe_id', 'ingredient_id', 'quantity'];

    public function recipe(): BelongsTo
    {
        return $this->belongsTo(Recipe::class, 'recipe_id', 'id');
    }

    public function ingredient(): BelongsTo
    {
        return $this->belongsTo(Ingredients::class);
    }
}
