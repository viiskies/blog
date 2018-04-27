@extends('layouts.app')

@section('content')

    <h2>{{ $post->title }}</h2>

    <h4>Date: {{ $post->date }}</h4>
    <h4>Author: {{ $post->user->name }}</h4>

    <p>{!! $post->content !!}</p>

    @auth
        @if (Auth::user()->id == $post->user->id)
        <div class="row justify-content-md-center mt-5">
            <div class="col-12 text-center">
                <a href="{{ route('posts.edit', ['id' => $post->id]) }}">Edit post</a> /
                <a href="{{ route('posts.delete', ['id' => $post->id]) }}">Delete a post</a>
            </div>
        </div>
        @endif
    @endauth
@endsection