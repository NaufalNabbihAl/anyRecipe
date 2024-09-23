<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use App\Models\User;
use App\Models\Recipe;
use App\Models\Category;
use App\Models\Ingredients;
use App\Models\RecipeIngredients;
use App\Models\Step;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function previous()
    {
        return view('user.previous');
    }
    // public function dashboard()
    // {
    //     $recipes = session('recipes');
    //     $randomRecipes = Recipe::inRandomOrder()->limit(2)->get();
    //     $getRecipe = Recipe::orderBy('name')->get();
    //     $articles = Articles::orderBy('created_at', 'desc')->limit(2)->get();
    //     return view('user.dashboard', compact('recipes', 'randomRecipes', 'articles', 'getRecipe'));
    // }
    // public function dashboard(Request $request)
    // {
    //     $search = $request->input('search');

    //     $recipes = Recipe::when($search, function ($query) use ($search) {
    //         return $query->where('name', 'like', '%' . $search . '%');
    //     })->orderBy('name')->paginate(10);

    //     $randomRecipes = Recipe::inRandomOrder()->limit(2)->get();
    //     $articles = Articles::orderBy('created_at', 'desc')->limit(2)->get();

    //     return view('user.dashboard', compact('recipes', 'randomRecipes', 'articles', 'search'));
    // }

    public function dashboard(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            // If there's a search query, use it to filter recipes
            $recipes = Recipe::where('name', 'like', '%' . $search . '%')
                ->orderBy('name')
                ->paginate(10);

            // Store search results in session
            session(['recipes' => $recipes->items()]);
        } else {
            // If no search query, use recipes from session or fetch default ones
            $recipes = session('recipes', function () {
                return Recipe::orderBy('name')->limit(10)->get();
            });
        }

        $randomRecipes = Recipe::inRandomOrder()->limit(2)->get();
        $articles = Articles::orderBy('created_at', 'desc')->limit(2)->get();

        return view('user.dashboard', compact('recipes', 'randomRecipes', 'articles', 'search'));
    }
    public function search()
    {
        $ingredients = Ingredients::orderBy('name')->get();
        return view('user.search', compact('ingredients'));
    }
    public function selected(Request $request)
    {
        $request->validate([
            'ingredients' => 'required|array|min:1',
            'ingredients.*' => 'exists:ingredients,id',
        ]);
        $selectedIngredientsIds = $request->input('ingredients');

        $selectedIngredients = Ingredients::whereIn('id', $selectedIngredientsIds)->get();

        return view('user.selected', compact('selectedIngredients'));
    }
    public function found(Request $request)
    {
        $ingredientIds = $request->input('ingredient');
        $recipes = Recipe::whereHas('recipeIngredients', function ($query) use ($ingredientIds) {
            $query->whereIn('ingredient_id', $ingredientIds); // Cari resep yang memiliki salah satu bahan
        })->get();

        return view('user.found', compact('recipes'));
    }



    public function upload()
    {
        $categories = Category::orderBy('name')->get();
        $ingredients = Ingredients::orderBy('name')->get();
        return view('user.upload', compact('ingredients', 'categories'));
    }

    public function setting()
    {
        $user = auth()->user();
        return view('user.setting', compact('user'));
    }
    public function deleteUser($id)
    {
        User::destroy($id);
        return redirect()->route('home');
    }

    public function changeNamePassword()
    {
        $user = auth()->user();
        return view('user.changeNamePassword', compact('user'));
    }

    public function changeNamePasswordStore(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'old_password' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = auth()->user();


        if (!Hash::check($request->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Password lama tidak sesuai']);
        }


        if ($request->filled('name')) {
            $user->name = $request->name;
        }


        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('user.setting')->with('success', 'Data berhasil diubah');
    }

    public function selectRecipebyIngredients(Request $request)
    {
        $idIngredients = Ingredients::where('name', 'like', '%' . $request->ingredients . '%')->first();

        $idCategory = Category::where('name', 'like', '%' . $request->food . '%')->first();

        if (!$idIngredients || !$idCategory) {
            // $recipes = [];
            $recipes = collect();
            
        } else {
            $recipes = Category::find($idCategory->id)
                ->recipes()
                ->whereDoesntHave('recipeIngredients', function ($query) use ($idIngredients) {
                    $query->where('ingredient_id', $idIngredients->id);
                })
                ->limit(2)
                ->get();
        }
        $user = auth()->user();
        $user->category = $request->food;
        $user->ingredients = $request->ingredients;
        $user->save();
    
        session(['recipes' => $recipes]);

        return redirect()->route('user.dashboard');
    }

    public function showRecipe($id)
    {
        $recipe = Recipe::find($id);
        return view('user.showRecipe', compact('recipe'));
    }

    public function uploadStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'hours' => 'nullable|numeric',
            'minutes' => 'nullable|numeric',
            'seconds' => 'nullable|numeric',
            'category' => 'required|string',
            'ingredients' => 'required|array',
            'ingredients.*' => 'exists:ingredients,id',
            'steps' => 'required|array',
            'steps.*' => 'string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('storage/recipe'), $imageName);


        $recipe = Recipe::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $imageName,
            'hours' => $request->hours,
            'minutes' => $request->minutes,
            'seconds' => $request->seconds,
            'category_id' => $request->category,
            'user_id' => auth()->user()->id,
        ]);
        $recipe->save();
        $idrecipe = $recipe->id;
        foreach ($request->ingredients as $key => $ingredient) {
            $data = new RecipeIngredients();
            $data->recipe_id = $idrecipe;
            $data->ingredient_id = $ingredient;
            $data->quantity = $request->quantity[$key];
            $data->save();
        }
        foreach ($request->steps as $key => $step) {
            $data = new Step();
            $data->recipe_id = $idrecipe;
            $data->description = $step;
            $data->save();
        }
        return redirect()->route('user.dashboard')->with('success', 'Resep berhasil diupload');
    }
}
