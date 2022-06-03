@extends('default')

@section('title')
Received Applications
@endsection

@section('content')
<ul class="u-grid u-grid-gap-2">
        @foreach($applications as $application)
            @include('applications.components.applicationCard--index')
        @endforeach
    </ul>
@endsection