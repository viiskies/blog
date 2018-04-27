@extends('layouts.app')

@section('content')

    <h1>{{ $user->name }}</h1>
    <p>{{ $user->email }}</p>

    @forelse ($user->posts as $post)
        <h2>
            <a href="{{ route('posts.show', ['id' => $post->id]) }}">
                {{ $post->title }}
            </a>
        </h2>
        <h4>Date: {{ $post->date }}</h4>
        <br>
    @empty
        <p>No posts</p>
    @endforelse

    @auth
        @if (Auth::user()->id == $user->id)
            <div class="row justify-content-md-center mt-5">
                <div class="col-12 text-center">
                    <form action="{{ route('users.edit', ['id' => $user->id]) }}" method="GET">
                        @csrf
                        <button>Edit user</button>
                    </form>
                    <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST">
                        {{ method_field('DELETE') }}
                        @csrf
                        <button>Delete user</button>
                    </form>
                </div>
            </div>
        @endif
    @endauth

@endsection