@extends('default')

@section('title')
Delete Application
@endsection

@section('content')
<ul class="u-grid u-grid-gap-2">
        @foreach($applications as $application)
            @include('applications.components.applicationCard--admin')
        @endforeach
    </ul>
@endsection