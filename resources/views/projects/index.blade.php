@extends('layouts.app')

@section('content')
    <h2>Jobs & Projects</h2>
    <hr>
    @if($projects->count()>0)
        @foreach($projects as $project)
            <div class="card">
                <div class="card-body">
                    <div class="row">
                         <div class="col-12 col-md-8">
                            <h5 class="card-title"><a href="/projects/{{$project->id}}">{{$project->name}}</a></h5>
                            <small class="card-subtitle">{{str_limit($project->description, 100)}}</small>
                        </div>
                        <div class="col-12 col-md-2">
                            <h5 class='text-primary'>{{$project->budgetcurrency}} {{$project->budgetprice}}</h5>
                            <small class="card-subtitle">Budget</small>
                        </div>
                        <div class="col-12 col-md-2">
                            <h5 class='text-primary'>{{$project->user->name}}</h5>
                            <small class="card-subtitle">Employer</small>
                        </div>
                    </div>
                </div>
            </div><br/>
        @endforeach
        <div>{{$projects->links()}}</div>
    @else
        <p>No project found</p>
    @endif

@endsection