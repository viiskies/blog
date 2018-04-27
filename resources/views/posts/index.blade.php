@extends('layouts.app')

@section('content')
    <h1 class="display-1">LARAVEL EXAM BLOG</h1>

    @forelse ($posts as $post)
        <h2 class="display-4">
            <a href="{{ route('posts.show', ['id' => $post->id]) }}">
                {{ $post->title }}
            </a>
        </h2>
        <i>by:
            <a href="{{ route('users.show', ['id' => $post->user->id]) }}">
                {{$post->user->name}}
            </a>
        </i>
        <p class="">{{$post->content}}</p>
    @empty
        <p>No posts</p>
    @endforelse


    {{ $posts->links() }}
@endsection
