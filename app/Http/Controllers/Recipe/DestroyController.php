<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class DestroyController extends Controller
{
    public function __invoke(Recipe $recipe)
    {
        $recipe->delete();
        return redirect()->route('recipe.index');
    }
}
