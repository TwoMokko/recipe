<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use App\Models\Recipe;

class UpdateController extends Controller
{
    public function __invoke(Recipe $recipe)
    {
        $data = \request()->validate([
            'title'             => 'required|string',
            'description'       => 'string',
            'image'             => 'string',
            'cooking_time'      => 'string',
            'category_id'       => 'required',
            'ingredients'       => 'required',
        ]);
        $ingredients = $data['ingredients'];
        unset($data['ingredients']);

        $recipe->update($data);
        $recipe->ingredients()->sync($ingredients);
        return redirect()->route('recipe.show', $recipe->id);
    }
}
