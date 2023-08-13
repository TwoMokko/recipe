@extends('layouts.main')
@section('content')
    <div>
        <form action="{{ route('recipe.update', $recipe->id) }}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="title" value="{{ $recipe->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" name="description" class="form-control" id="description" placeholder="description">{{ $recipe->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="text" name="image" class="form-control" id="image" placeholder="image" value="{{ $recipe->image }}">
            </div>
            <div class="mb-3">
                <label for="cooking_time" class="form-label">Cooking time</label>
                <input type="time" name="cooking_time" class="form-control" id="cooking_time" placeholder="cooking time" value="{{ $recipe->cooking_time }}">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection

