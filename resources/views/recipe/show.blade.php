@extends('layouts.main')
@section('content')
    <div>
        <div>{{ $recipe->id }}. {{ $recipe->title }}</div>
        <div>{{ $recipe->description }}</div>
    </div>
    <div class="my-3">
        <a href="{{ route('recipe.edit', $recipe->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('recipe.delete', $recipe->id) }}" method="post" class="d-inline-block">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
    <div>
        <a href="{{ route('recipe.index') }}"><< Back</a>
    </div>
@endsection

