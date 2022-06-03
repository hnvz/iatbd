@extends('default')

@section('title')
Add a pet
@endsection

@section('content')
<header class="heading">
    <h2> Add a new pet </h2>
</header>
<article class="create-form a-popup">
    <form class="create-form__form" action="/pets/create" method="POST">
        @csrf

        <section class="create-form__section">
            <label for="name">Name </label>
            <input class="create-form__input"name="name" id="name" type="text"/>
        </section>  

        <section class="create-form__section">
            <label for="type">Type </label>
            <select class="create-form__input" name="type" id="type">
                @foreach($pet_types as $pet_type)
                    <option value="{{$pet_type->type}}"> {{$pet_type->type}} </option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section">
            <label for="startdate">Start date </label>
            <input class="create-form__input"name="startdate" id="startdate" type="date"/>
        </section> 

        <section class="create-form__section">
            <label for="enddate">End date </label>
            <input class="create-form__input"name="enddate" id="enddate" type="date"/>
        </section> 


        <section class="create-form__section">
            <label for="hourly_rate">Hourly rate </label>
            <input class="create-form__input"name="hourly_rate" id="hourly_rate" type="integer"/>
        </section> 


        <section class="create-form__section">
            <label for="description">Description </label>
            <textarea class="create-form__input create-form__input--big" name="description" id="description" type="textarea"></textarea>
        </section>


        <section class="create-form__section">
            <button class="create-form__button" type="submit">Add pet</button>
        </section>
    </form>
</article>
@endsection