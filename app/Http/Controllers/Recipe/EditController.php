<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Recipe;

class EditController extends Controller
{
    public function __invoke(Recipe $recipe)
    {
        $categories = Category::all();
        $ingredients = Ingredient::all();

        return view('recipe.edit', compact('recipe', 'categories', 'ingredients'));
    }
}
