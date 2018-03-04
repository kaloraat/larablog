@extends('layouts.app')

@section('content')

    <div class="container">
        @foreach($categories as $category)
            <h2><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></h2>
        @endforeach
    </div>

@endsection
