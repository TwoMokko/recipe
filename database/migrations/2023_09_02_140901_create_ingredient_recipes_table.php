<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingredient_recipes', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ingredient_id');
            $table->unsignedBigInteger('recipe_id');

            $table->index('ingredient_id', 'ingredient_recipe_ingredient_idx');
            $table->index('recipe_id', 'ingredient_recipe_recipe_idx');

            $table->foreign('ingredient_id', 'ingredient_recipe_ingredient_fk')->on('ingredients')->references('id');
            $table->foreign('recipe_id', 'ingredient_recipe_recipe_fk')->on('recipes')->references('id');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingredient_recipes');
    }
};
