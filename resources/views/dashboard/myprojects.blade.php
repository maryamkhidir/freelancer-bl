@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
      @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    @include('inc.dashboardnav')
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h3 class="text-muted">PROJECTS</h3>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group mr-2">
              <button class="btn btn-sm btn-outline-secondary">Share</button>
              <button class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              This week
            </button>
          </div>
        </div>
        
        <a href="/projects/create" class="btn btn-primary md-3 float-right">Create Project</a>
        <h4>My projects</h4><br>
        @if(count($projects) > 0)
            <table class="table table-striped table-sm my-3">
                <tr>
                    <th><h5>Project</h5></th>
                    <th><h5>Budget</h5></th>
                    <th>&nbsp;</th>
                </tr>
                @foreach($projects as $project)
                <tr>
                    <td><h5><a href="/projects/{{$project->id}}">{{$project->name}}</a></h5></td>
                    <td><h5 class="text-info"><span class="text-dark">{{$project->budgetcurrency}}</span> {{$project->budgetprice}}</h5></td>
                    <td class="float-right"><a href="/projects/{{$project->id}}/edit" class="btn btn-success btn-sm float-left mr-1" style="min-width:80px">Edit</a>
                        {!! Form::open(['action' => ['ProjectsController@destroy', $project->id], 'method' => 'POST', 'class' => 'float-left']) !!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm', 'style' => 'min-width:80px'])}}
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
            </table>
        @else
            <p>You have no projects</p>
        @endif
      </main>

    </div>
</div>

@endsection
