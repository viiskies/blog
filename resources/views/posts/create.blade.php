@extends('layouts.app')

@section('content')

    <div class="col-xl-6">
        <form method="post" action="{{ route('posts.store') }}">

            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ old('title') }}">
            </div>

            @if ($errors->get('title'))
                @foreach ($errors->get('title') as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                @endforeach
            @endif

            <div class="form-group">
                <label for="title">Content</label>
                <textarea type="text" name="content" class="form-control" id="content" placeholder="Blog content goes here...">{{ old('content') }}</textarea>
            </div>

            @if ($errors->get('title'))
                @foreach ($errors->get('title') as $error)
                    <div class="alert alert-danger" role="alert">{{ $error }}</div>
                @endforeach
            @endif

            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
    </div>

@endsection