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
Route::get('/recipe/create', [RecipeController::class, 'create']);
Route::get('/recipe/update', [RecipeController::class, 'update']);
Route::get('/recipe/delete', [RecipeController::class, 'delete']);

Route::get('/main', [MainController::class, 'index'])->name('main.index');
