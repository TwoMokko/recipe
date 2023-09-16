@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('recipe.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{ old('title') }}">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" name="description" class="form-control" id="description" placeholder="description">{{ old('description') }}</textarea>
                @error('description')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="image" value="{{ old('image') }}">
                @error('image')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cooking_time" class="form-label">Cooking time</label>
                <input type="time" name="cooking_time" class="form-control" id="cooking_time" placeholder="cooking time" value="{{ old('cooking_time') }}">
                @error('cooking_time')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <select class="form-select" name="category_id" aria-label="category">
                    <option selected>Select category</option>
                    @foreach($categories as $category)
                    <option {{ old('category_id') == $category->id ? ' selected' : '' }} value="{{$category->id}}">{{$category->title}}</option>
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
                        <input class="form-check-input" type="checkbox" name="ingredients[]" value="{{ $ingredient->id }}" {{ (old('ingredients') && in_array($ingredient->id, old('ingredients'))) ? ' checked' : '' }}>
                        {{ $ingredient->name }}
                    </label>
                    @error('ingredients')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection

