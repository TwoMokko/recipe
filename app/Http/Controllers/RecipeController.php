<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function index() {
        $recipes = Recipe::find(1);
        $recipes = Recipe::all();
        $recipes = Recipe::where('state', Recipe::STATE_ACTIVE)->get();
        foreach ($recipes as $recipe) {
            dump($recipe->title);
        }
        dd('end');
    }

    public function create() {
        $recipesArr = [
            [
                'title' => 'Борщ',
                'description' => 'суп вкусный',
                'image' => 'img',
                'cooking time' => '20',
            ]
        ];

        Recipe::create([
            'title' => 'Сырники',
            'description' => 'завтрак супер',
            'image' => 'img',
            'cooking time' => '30',
        ]);

        dd('created');
    }

    public function update() {
        $recipe = Recipe::find(1);
        $recipe->update([
            'title' => 'Брауни',
        ]);

        dd('updated');
    }

    public function delete() {
        $recipe = Recipe::withTrashed()->find(1);
        $recipe->restore();
//        $recipe->delete();

        dd('deleted');
    }
}
