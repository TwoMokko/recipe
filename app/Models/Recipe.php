<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Validation\Rules\In;

class Recipe extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'recipes';
//    protected $guarded = [];
    protected $guarded = false;

    public function category() {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function ingredients() {
        return $this->belongsToMany(Ingredient::class, 'ingredient_recipes', 'recipe_id', 'ingredient_id');
    }
}
