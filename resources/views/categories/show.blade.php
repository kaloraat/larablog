@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron">
            <h1>{{ $category->name }}</h1>

            @if(Auth::user() && Auth::user()->role_id === 1)

            <div class="btn-group">
                <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm btn-margin-right">Edit</a>

                <form action="{{ route('categories.destroy', $category->id) }}" method="post">
                    {{ method_field('delete') }}
                        <button type="submit" class="btn btn-danger btn-sm pull-left">Delete</button>
                    {{ csrf_field() }}
                </form>
            </div>

            @endif
        </div>

        <div class="col-md-12">
            @foreach($category->blog as $blog)
                <h3><a href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></h3>
            @endforeach
        </div>

    </div>

@endsection