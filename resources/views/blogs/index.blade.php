@extends('layouts.app')

@section('content')

@include('partials.meta_static')

    <div class="container">
        @foreach($blogs as $blog)
            <h2><a href={{ route('blogs.show', $blog->id) }}>{{ $blog->title }}</a></h2>
            <p>{{ $blog->body }}</p>
        @endforeach
    </div>

@endsection

