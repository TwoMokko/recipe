@extends('layouts.main')
@section('content')
    <div>
        <div>{{ $recipe->id }}. {{ $recipe->title }}</div>
        <div>{{ $recipe->description }}</div>
    </div>
    <div>
        <a href="{{ route('recipe.edit', $recipe->id) }}">Edit</a>
    </div>
    <div>
        <form action="{{ route('recipe.delete', $recipe->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="Delete" class="btn btn-danger">
        </form>
    </div>
    <div>
        <a href="{{ route('recipe.index') }}">Back</a>
    </div>
@endsection

