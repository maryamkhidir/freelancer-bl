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
          <h1 class="h2">Dashboard</h1>
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
        
        <div class="card bg-light mb-3 float-left mr-auto" style="max-width: 18rem;">
            <div class="card-header h5">Biography</div>
            <div class="card-body">
              <p class="card-text">
                 
                  <p>Welcome to your dashboard <strong>{{ Auth::user()->name }}</strong>. Let's get you started!</p>
                  
                  <a href="#" class="btn btn-primary md-3 float-right">Get Started</a>
                
            </p>
            </div>
          </div>
          <div class="card bg-light mb-3 ml-auto" style="max-width: 18rem;">
              <div class="card-header h5">Projects</div>
              <div class="card-body">
                <p class="card-text">
                  @if(count($projects) > 0) 
                    <p>You have {{count($projects)}} project(s) </p>
                    <a href="/projects/create" class="btn btn-primary md-3 float-left">Create Project</a>
                    <a href="/dashboard/myprojects" class="btn btn-primary md-3 float-right">View Projects</a>
                  @else
                    <p>You have no projects</p>
                    <a href="/projects/create" class="btn btn-primary md-3 float-right">Create Project</a>
                  @endif
              </p>
              </div>
            </div>

      </main>

    </div>
</div>

@endsection
