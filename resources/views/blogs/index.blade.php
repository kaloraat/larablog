@extends('layouts.app')

@include('partials.meta_static')

@section('content')

    <div class="container">

        @if(Session::has('blog_created_message'))
            <div class="alert alert-success">
                {{ Session::get('blog_created_message') }}
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            </div>
        @endif

        @foreach($blogs as $blog)
            <h2><a href={{ route('blogs.show', [$blog->slug]) }}>{{ $blog->title }}</a></h2>
            {!! $blog->body !!}

            @if($blog->user)
                Author: <a href="{{ route('users.show', $blog->user->name) }}">{{ $blog->user->name }}</a> | Posted: {{ $blog->created_at->diffForHumans() }}
            @endif
            <hr>
        @endforeach

    </div>

@endsection



