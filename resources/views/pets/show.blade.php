@extends('default')
@section('title')
    {{$pet->name}}
@endsection

@section('content')

    @include('pets.components.petCard--show')
@endsection