<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index() {
//        $recipes = Recipe::find(1);
        $recipes = Recipe::all();
//        $recipes = Recipe::where('state', Recipe::STATE_ACTIVE)->get();
//        foreach ($recipes as $recipe) {
//            dump($recipe->title);
//        }

        return view('recipe.index', compact('recipes'));
    }

    public function create() {
        return view('recipe.create');
    }

    public function store(){
        $data = \request()->validate([
            'title'             => 'string',
            'description'       => 'string',
            'image'             => 'string',
            'cooking_time'      => 'string',
        ]);
        Recipe::create($data);
        return redirect()->route('recipe.index');
    }

    public function show(Recipe $recipe) {
//        $recipe = Recipe::findOrFail($id);
        return view('recipe.show', compact('recipe'));
    }

    public function edit(Recipe $recipe) {
       return view('recipe.edit', compact('recipe'));
    }

    public function update(Recipe $recipe) {
//        $recipe = Recipe::find(1);
//        $recipe->update([
//            'title' => 'Брауни',
//        ]);
        $data = \request()->validate([
            'title'             => 'string',
            'description'       => 'string',
            'image'             => 'string',
            'cooking_time'      => 'string',
        ]);

        $recipe->update($data);
        return redirect()->route('recipe.show', $recipe->id);
    }

    public function delete() {
        $recipe = Recipe::withTrashed()->find(1);
        $recipe->restore();
//        $recipe->delete();

        dd('deleted');
    }

    public function destroy(Recipe $recipe) {
        $recipe->delete();
        return redirect()->route('recipe.index');
    }
}
