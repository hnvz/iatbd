@extends('default')

@section('title')
request
@endsection

@section('content')
@foreach($applications as $application)
<h3 class="gridCard__application__heading"> Application sent to {{$application->receiver->name}} </h3>
            <p class="gridCard__application__text"> Current Status: {{$application->status}} </p>
        @endforeach
@endsection