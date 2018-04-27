@extends('layouts.app')

@section('content')

    <h1>{{ $user->name }}</h1>
    <p>
    {{ $user->email }}
    </p>

    @forelse ($user->posts as $post)
        <h2>{{ $post->title }}</h2>
        <h4>Date: {{ $post->date }}</h4>
    @empty
        <p>No posts</p>
    @endforelse

    @auth
        @if (Auth::user()->id == $user->id)
            <div class="row justify-content-md-center mt-5">
                <div class="col-12 text-center">
                    <a href="{{ route('users.edit', ['id' => $user->id]) }}">Edit user</a>
                    <a href="{{ route('users.delete', ['id' => $user->id]) }}">Delete a user</a>
                </div>
            </div>
        @endif
    @endauth

@endsection