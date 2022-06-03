@extends('default')

@section('title')
request
@endsection

@section('content')
<article class="create-form">
    <form class="create-form__form" action="/application" method="POST">
        @csrf
        <label for="id">Apply to take care of </label>
        <select class="create-form__input" name="id" id="id">
                    <option value="{{$pet->id}}"> {{$pet->name}} </option> 
            </select>
            <section class="create-form__section">
            <button class="create-form__button" type="submit">Apply</button>
        </section>
</form>

</article>
@endsection