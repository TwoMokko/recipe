@extends('layouts.main')
@section('content')
    <?php
    $checkIngredient = function ($recipe, $ingredient, $old) {
        foreach ($recipe->ingredients as $recipeIngredient) {
            if (isset($old)) {
                if (in_array($ingredient->id, $old)) return true;
            } else {
                if ($recipeIngredient->id == $ingredient->id) return true;
            }
        }
        return false;
    };

    $checkCategory = function ($category_id, $recipe_id, $old) {
        if (isset($old)) {
            if ($old == $category_id) return true;
        } else {
            if ($category_id == $recipe_id) return true;
        }
        return false;
    }
    ?>
    <div>
        {{--        {{dd($recipe->ingredients)}}--}}
        <form action="{{ route('recipe.update', $recipe->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title"
                       value="{{ old('title') ?? $recipe->title }}">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" name="description" class="form-control" id="description"
                          placeholder="description">{{ old('description') ?? $recipe->description }}</textarea>
                @error('description')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="image"
                       value="{{ old('image') ?? $recipe->image }}">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cooking_time" class="form-label">Cooking time</label>
                <input type="time" name="cooking_time" class="form-control" id="cooking_time" placeholder="cooking time"
                       value="{{ old('cooking_time') ?? $recipe->cooking_time }}">
                @error('cooking_time')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id" aria-label="category">
                    <option selected>Select category</option>
                    @foreach($categories as $category)
                        <option
                            {{ $checkCategory($category->id, $recipe->category_id, old('category_id')) ? 'selected' : '' }}
                            value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
                @error('category_id')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div>
                @foreach($ingredients as $ingredient)
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" name="ingredients[]"
                                   value="{{ $ingredient->id }}" {{ $checkIngredient($recipe, $ingredient, old('ingredients')) ? 'checked="checked"' : '' }}>
                            {{ $ingredient->name }}
                        </label>
                        @error('ingredients')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

