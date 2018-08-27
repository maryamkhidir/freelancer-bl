@extends('layouts.app')

@section('content')
<a href="/projects" class="btn btn-sm btn-primary">Back to Projects</a>

    <h1 class="mt-3">{{$project->name}}</h1>
    <hr>
    <div class="row">
            <div class="col-12 col-md-4">
            <h3>Project Budget</h3>
            <h5 class='text-primary'>{{$project->budgetcurrency}} {{$project->budgetprice}}</h5>
        </div>
        <div class="col-12 col-md-4">
            <h3>Employer</h3>
            <h5 class='text-primary'>{{$project->user->name}}</h5>
        </div>
        <div class="col-12 col-md-4">
            <h3>Created</h3>
            <h5 class='text-primary'>{{$project->created_at}}</h5>
        </div>
    </div>
    <hr>
    <h3>Project Description</h3>
    <div>
        {!!$project->description!!}
    </div>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $project->user_id)
            <div>
                <a href="/projects/{{$project->id}}/edit" class="btn btn-outline-dark">Edit Project</a>
                {!! Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete Project', ['class' => 'btn btn-danger'])}}
                {!! Form::close() !!}
            </div>
        @endif
    @endif
@endsection