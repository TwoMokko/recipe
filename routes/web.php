<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'hkggfh';
});




Route::get('/recipe', [RecipeController::class, 'index'])->name('recipe.index');
Route::get('/recipe/create', [RecipeController::class, 'create'])->name('recipe.create');

Route::post('/recipe', [RecipeController::class, 'store'])->name('recipe.store');
Route::get('/recipe/{recipe}', [RecipeController::class, 'show'])->name('recipe.show');
Route::get('/recipe/{recipe}/edit', [RecipeController::class, 'edit'])->name('recipe.edit');
Route::patch('/recipe/{recipe}', [RecipeController::class, 'update'])->name('recipe.update');
Route::delete('/recipe/{recipe}', [RecipeController::class, 'destroy'])->name('recipe.delete');

Route::get('/recipe/update', [RecipeController::class, 'update']);
Route::get('/recipe/delete', [RecipeController::class, 'delete']);

Route::get('/main', [MainController::class, 'index'])->name('main.index');
