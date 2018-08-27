@extends('layouts.app')

@section('content')
    <h1>Edit Project</h1>
    
    {!! Form::open(['action' => ['ProjectsController@update', $project->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Choose a name for your project')}}
            {{Form::text('name', $project->name, ['class' => 'form-control', 'placeholder' => 'Build a website'])}}
        </div>
        <div class="form-group">
                {{Form::label('description', 'Tell us more about your project')}}
                {{Form::textarea('description', $project->description, ['class' => 'form-control', 'placeholder' => 'Start with a bit about yourself or your business, and include an overview of what you need done'])}}
        </div>
        <div class="form-group">
            {{Form::label('budgetcurrency', 'What is your estimated budget?', ['style' => 'display:block'])}}
            {{Form::select('budgetcurrency', ['NGN' => 'NGN', 'USD' => 'USD'], $project->budgetcurrency, ['class' => 'form-control col-sm-1', 'style' => 'display:inline'])}}  
            {{Form::number('budgetprice', $project->budgetprice, ['class' => 'form-control col-sm-2', 'style' => 'display:inline', 'placeholder' => 'Budget Amount'])}}
        </div>    
        <div class="form-group">
                {{Form::hidden('_method', 'PUT')}}
                {{Form::submit('Update Project', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}

@endsection