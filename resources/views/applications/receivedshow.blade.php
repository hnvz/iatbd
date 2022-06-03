@extends('default')

@section('title')
Petsitting Application
@endsection

@section('content')
        @if($applications->status == 'pending')
                @include('applications.components.applicationCard--pending')
        @elseif($applications->status == 'accepted')
                @include('applications.components.applicationCard--accepted')
        @endif
@endsection