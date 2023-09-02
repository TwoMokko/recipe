<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index() {
//        $recipes = Recipe::find(1);
        $recipes = Recipe::all();

//        $category = Category::find(1);
//        $recipe = Recipe::find(3);
//        $recipes = Recipe::where('category_id', $category->id)->get();
//
//        dd($recipe->ingredients);
//        $recipes = Recipe::where('state', Recipe::STATE_ACTIVE)->get();
//        foreach ($recipes as $recipe) {
//            dump($recipe->title);
//        }

        return view('recipe.index', compact('recipes'));
    }

    public function create() {
        $categories = Category::all();

        return view('recipe.create', compact('categories'));
    }

    public function store(){
        $data = \request()->validate([
            'title'             => 'string',
            'description'       => 'string',
            'image'             => 'string',
            'cooking_time'      => 'string',
            'category_id'       => '',
        ]);
        Recipe::create($data);
        return redirect()->route('recipe.index');
    }

    public function show(Recipe $recipe) {
//        $recipe = Recipe::findOrFail($id);
        return view('recipe.show', compact('recipe'));
    }

    public function edit(Recipe $recipe) {
        $categories = Category::all();
       return view('recipe.edit', compact('recipe', 'categories'));
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
            'category_id'       => '',
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
