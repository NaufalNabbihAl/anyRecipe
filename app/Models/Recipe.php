<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Recipe extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'user_id', 'image', 'hours', 'minutes', 'seconds', 'category_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function recipeIngredients(): HasMany
    {
        return $this->hasMany(RecipeIngredients::class, 'recipe_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function steps(): HasMany
    {
        return $this->hasMany(Step::class, 'recipe_id', 'id');
    }
   
}
