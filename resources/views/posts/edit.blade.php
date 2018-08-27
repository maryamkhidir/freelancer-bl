@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Post Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Enter your post here', 'id' => 'article-ckeditor'])}}
        </div>
        <div class="form-group">
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Update Post!', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}

@endsection