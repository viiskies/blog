@extends('layouts.app')

@section('content')

    @foreach($users as $user)
        <h2>
            <a href="{{ route( 'users.single', [ 'id' => $user->id ] ) }}">
                {{ $user->name }}
            </a>
        </h2>
        <p>{{ $user->email }}</p>
    @endforeach

@endsection
