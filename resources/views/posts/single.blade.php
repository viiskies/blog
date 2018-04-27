@extends('layouts.app')

@section('content')

    <h2>{{ $post->title }}</h2>
    <h4>Date: {{ $post->date }}</h4>
    <h4>
        Author:
        <a href="{{ route('users.show', ['id' => $post->user->id]) }}">
            <i>{{ $post->user->name }}</i>
        </a>
    </h4>

    <p>{!! $post->content !!}</p>

    @auth
        @if (Auth::user()->id == $post->user->id)
        <div class="row justify-content-md-center mt-5">
            <div class="col-12 text-center">

                <form action="{{ route('posts.edit', ['id' => $post->id]) }}" method="GET">
                    @csrf
                    <button>Edit a post</button>
                </form>
                <form action="{{ route('posts.destroy', ['id' => $post->id]) }}" method="POST">
                    {{ method_field('DELETE') }}
                    @csrf
                    <button>Delete post</button>
                </form>
            </div>
        </div>
        @endif
    @endauth
@endsection