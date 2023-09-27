<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class IndexController extends BaseController
{
    public function __invoke()
    {
        $recipes = Recipe::paginate(4);
        return view('recipe.index', compact('recipes'));
    }
}
