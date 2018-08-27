@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Post Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['class' => 'form-control', 'placeholder' => 'Enter your post here', 'id' => 'article-ckeditor'])}}
        </div>
        <div class="form-group">
                {{Form::submit('Submit Post!', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}

@endsection