<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use App\Http\Filters\RecipeFilter;
use App\Http\Requests\Recipe\FilterRequest;
use App\Models\Recipe;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $filter = app()->make(RecipeFilter::class, ['queryParams' => array_filter($data)]);
        $recipes = Recipe::filter($filter)->paginate(2);

//        $recipes = Recipe::paginate(4);
        return view('recipe.index', compact('recipes'));
    }
}
