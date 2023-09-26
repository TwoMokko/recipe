<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Ingredient;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $categories = Category::all();
        $ingredients = Ingredient::all();

        return view('recipe.create', compact('categories', 'ingredients'));
    }
}
