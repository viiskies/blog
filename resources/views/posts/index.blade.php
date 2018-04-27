@extends('layouts.app')

@section('content')

    @forelse ($posts as $post)
        <h2>
            <a href="{{ route('posts.single', ['id' => $post->id]) }}">
                {{ $post->title }}
            </a>
        </h2>
        <p>{{$post->content}}</p>
        <p>{{$post->user->name}}</p>
    @empty
        <p>No posts</p>
    @endforelse


    {{ $posts->links() }}
@endsection
