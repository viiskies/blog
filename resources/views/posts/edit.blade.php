@extends('layouts.app')

@section('content')
    <form method="post" action="{{ route( 'posts.update', [ 'postid' => $post->id ] ) }}">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title" value="{{ $post->title }}">
        </div>
        @if ($errors->get( 'title' ))
            @foreach ($errors->get( 'title' ) as $error)
                <div class="alert alert-danger" role="alert">{{ $error }}</div>
            @endforeach
        @endif
        <div class="form-group">
            <label for="title">Content</label>
            <textarea type="text" name="content" class="form-control" id="content" placeholder="Blog content goes here...">{{ $post->content }}</textarea>
        </div>
        @if ( $errors->get( 'title' ))
            @foreach ($errors->get( 'title' ) as $error)
                <div class="alert alert-danger" role="alert">{{ $error }}</div>
            @endforeach
        @endif
        <button type="submit" class="btn btn-secondary">Submit</button>
    </form>

@endsection