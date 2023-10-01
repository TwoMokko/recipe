@extends('layouts.admin')
@section('content')
    <div>
        <div>
            <a href="{{ route('recipe.create') }}" class="btn btn-success mb-3">Add one</a>
        </div>
        @foreach($recipes as $recipe)
            <div><a href="{{ route('recipe.show', $recipe->id) }}">{{ $recipe->id }}. {{ $recipe->title }}</a></div>
        @endforeach

        <div class="mt-3">
            {{ $recipes->withQueryString()->links() }}
        </div>
    </div>
@endsection
