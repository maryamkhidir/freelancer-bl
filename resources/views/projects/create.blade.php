@extends('layouts.app')

@section('content')
    <h1>Tell us what you need done</h1>
    <small>Contact skilled freelancers within minutes. View profiles, ratings, portfolios and chat with them. Pay the freelancer only when you are 100% satisfied with their work.</small><hr>
    
    {!! Form::open(['action' => 'ProjectsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Choose a name for your project')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Build a website'])}}
        </div>
        <div class="form-group">
                {{Form::label('description', 'Tell us more about your project')}}
                {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Start with a bit about yourself or your business, and include an overview of what you need done'])}}
        </div>
        <div class="form-group">
            {{Form::label('budgetcurrency', 'What is your estimated budget?', ['style' => 'display:block'])}}
            {{Form::select('budgetcurrency', ['NGN' => 'NGN', 'USD' => 'USD'], 'NGN', ['class' => 'form-control col-sm-1', 'style' => 'display:inline'])}}  
            {{Form::number('budgetprice', '', ['class' => 'form-control col-sm-2', 'style' => 'display:inline', 'placeholder' => 'Budget Amount'])}}
    </div>
        <div class="form-group">
                {{Form::submit('Post My Project', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}

@endsection