@extends('default')
@section('title')
    {{$user->name}}
@endsection

@section('content')
@if (Auth::check() && (Auth::user()->role == 'Admin')) 
@if($user->blocked == false)
    <form class="create-form__form" action="/users/block/{{$user->id}}" method="POST">
                @csrf
        
        <button class="create-form__button" type="submit">Block User</button>

    </form>
@elseif($user->blocked == true)
    <form class="create-form__form" action="/users/unblock/{{$user->id}}" method="POST">
                @csrf
        
        <button class="create-form__button" type="submit">Unblock User</button>

    </form>
@endif
@endif
@section('content')

    @include('users.components.userCard')
    
        <h2 class="heading"> Owned Pets </h2>
        <ul class="u-grid ">
        @foreach($pets as $pet)
            @include('pets.components.petCard--index')
        @endforeach
    </ul>
    

@endsection
@endsection