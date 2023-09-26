<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use App\Http\Requests\Recipe\UpdateRequest;
use App\Models\Recipe;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Recipe $recipe)
    {
        $data = $request->validated();

        $this->service->update($recipe, $data);

        return redirect()->route('recipe.show', $recipe->id);
    }
}
