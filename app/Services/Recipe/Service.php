<?php

namespace App\Services\Recipe;

use App\Models\Recipe;

class Service
{
    public function store($data) {
        $ingredients = $data['ingredients'];
        unset($data['ingredients']);
        $recipe = Recipe::create($data);

        $recipe->ingredients()->attach($ingredients);
    }

    public function update($recipe, $data) {
        $ingredients = $data['ingredients'];
        unset($data['ingredients']);

        $recipe->update($data);
        $recipe->ingredients()->sync($ingredients);
    }
}
