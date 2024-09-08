<?php

namespace App\Http\Controllers;

use App\Models\RecipeIngredients;
use Filament\Forms\Form;
use Illuminate\Http\Request;
use Filament\Http\Livewire\FormComponent;


class RecipeIngredientsController extends FormComponent
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $recipe = Recipe::create([...]); // Create a new recipe instance

        // $recipeIngredients = $request->input('recipe_ingredients');

        // foreach ($recipeIngredients as $recipeIngredient) {
        //     $ingredientId = $recipeIngredient['ingredient_id'];
        //     $quantity = $recipeIngredient['quantity'];

        //     RecipeIngredients::create([
        //         'recipe_id' => $recipe->id,
        //         'ingredient_id' => $ingredientId,
        //         'quantity' => $quantity,
        //     ]);
        // }

        // // Return a success response
        // return redirect()->route('my.route')->with('success', 'Recipe ingredients saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(RecipeIngredients $recipeIngredients)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RecipeIngredients $recipeIngredients)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RecipeIngredients $recipeIngredients)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RecipeIngredients $recipeIngredients)
    {
        //
    }
}
