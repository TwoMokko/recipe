<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Ingredient;
use App\Models\Recipe;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(15)->create();
        $ingredients = Ingredient::factory(30)->create();
        $recipes = Recipe::factory(10)->create();

        foreach ($recipes as $recipe) {
            $ingredientsIds = $ingredients->random(5)->pluck('id');
            $recipe->ingredients()->attach($ingredientsIds);
        }

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
