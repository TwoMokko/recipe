<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Recipe;
use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace' => ''], function() {
    Route::get('/recipe', Recipe\IndexController::class)->name('recipe.index');
    Route::get('/recipe/create', Recipe\CreateController::class)->name('recipe.create');

    Route::post('/recipe', Recipe\StoreController::class)->name('recipe.store');
    Route::get('/recipe/{recipe}', Recipe\ShowController::class)->name('recipe.show');
    Route::get('/recipe/{recipe}/edit', Recipe\EditController::class)->name('recipe.edit');
    Route::patch('/recipe/{recipe}', Recipe\UpdateController::class)->name('recipe.update');
    Route::delete('/recipe/{recipe}', Recipe\DestroyController::class)->name('recipe.delete');
});

Route::group(['namespace' => '', 'prefix' => 'admin', 'middleware' => 'admin'], function() {
    Route::group([], function() {
        Route::get('/recipe', Admin\Recipe\IndexController::class)->name('admin.recipe.index');
    });
});

Route::get('/recipe/update', [RecipeController::class, 'update']);
Route::get('/recipe/delete', [RecipeController::class, 'delete']);


Route::get('/main', [MainController::class, 'index'])->name('main.index');
//Route::get('/admin/recipe', Admin\Recipe\IndexController::class)->name('admin.recipe.index');

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('profile');
