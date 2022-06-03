@extends('default')

@section('title')
Blocked Users
@endsection

@section('content')
<ul class="">
    <p>dsfhbjdf</p>
        @foreach($user as $user)
        
            @include('users.components.userCard')
        @endforeach
    </ul>
@endsection