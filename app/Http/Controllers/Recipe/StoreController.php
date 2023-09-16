<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class StoreController extends Controller
{
    public function __invoke()
    {
        $data = \request()->validate([
            'title'             => 'string',
            'description'       => 'string',
            'image'             => 'string',
            'cooking_time'      => 'string',
            'category_id'       => '',
            'ingredients'       => '',
        ]);
        $ingredients = $data['ingredients'];
        unset($data['ingredients']);

        $recipe = Recipe::create($data);

        $recipe->ingredients()->attach($ingredients);

        return redirect()->route('recipe.index');
    }
}
