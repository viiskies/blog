@extends('layouts.app')

@section('content')

    <div class="col-xl-6">
        <form method="post" action="{{ route('posts.store') }}">

            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="title">Content</label>
                <textarea type="text" name="content" class="form-control" id="content" placeholder="Blog content goes here...">{{ old('content') }}</textarea>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <button type="submit" class="btn btn-secondary">Submit</button>
        </form>
    </div>

@endsection