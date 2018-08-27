@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if($posts->count()>0)
        @foreach($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small class="card-subtitle">Created on {{$post->created_at}} by {{$post->user->name}}</small>
                </div>
            </div><br/>
        @endforeach
        <div>{{$posts->links()}}</div>
    @else
        <p>No post found</p>
    @endif

@endsection