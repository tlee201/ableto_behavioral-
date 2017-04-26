@extends('layouts.app')

@section('title', 'Dashboard | ')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 id="dash_title">Welcome to your Dashboard {{ Auth::user()->username }}!</h1>
            <div class="panel panel-primary">
              <div class="panel-heading">SURVEYS</div>
              @foreach($surveys as $survey)
                <a class="task" href="{{ url('/behavioral') }}"><div class="panel-body">{{ $survey->survey_name }}</div></a>
              @endforeach
            </div>

            <div class="panel panel-primary">
              <div class="panel-heading">THERAPISTS</div>
              <a class="task" href="#"><div class="panel-body">Dr. John Doe, MD</div></a>
            </div>

        </div>
    </div>
</div>
@endsection
