@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route( 'posts.update', [ 'postid' => $post->id ] ) }}">
        {{ method_field('PUT') }}
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea type="text" name="content" class="form-control" id="content" placeholder="Blog content goes here...">{{ $post->content }}</textarea>
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

@endsection