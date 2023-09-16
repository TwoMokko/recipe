<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class IndexController extends Controller
{
    public function __invoke()
    {
        $recipes = Recipe::all();
        return view('recipe.index', compact('recipes'));
    }
}
