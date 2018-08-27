@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-sm btn-primary">Back to Blog</a>

    <h1 class="mt-3">{{$post->title}}</h1>
    <hr>
    <div>
        {!!$post->body!!}
    </div>
    
    <small>Written at {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <div>
                <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-dark">Edit Post</a>
                {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete Post!', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            </div>
        @endif
    @endif
@endsection