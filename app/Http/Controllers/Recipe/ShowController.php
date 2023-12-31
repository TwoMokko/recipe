<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class ShowController extends BaseController
{
    public function __invoke(Recipe $recipe)
    {
        return view('recipe.show', compact('recipe'));
    }
}
