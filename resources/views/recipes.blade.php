@extends('layouts.main')
@section('content')
    <div>
        @foreach($recipes as $recipe)
            <div>{{ $recipe->title }}</div>
        @endforeach
    </div>
@endsection

