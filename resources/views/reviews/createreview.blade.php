@extends('default')

@section('title')
Write a review
@endsection

@section('content')
<article>
<form class="create-form__form" action="/reviews/create" method="POST">
        @csrf
        
        <section class="create-form__section">
            <label for="receiver">Ontvanger </label>
            <select class="create-form__input" name="receiver" id="receiver">
                    <option value=1> {{$receiver->name}} </option>
            </select>
        </section>  

        <section class="create-form__section">
            <label for="score">Score </label>
            <select class="create-form__input" name="score" id="score">
                    <option value=1> 1 </option>
                    <option value=2> 2 </option>
                    <option value=3> 3 </option>
                    <option value=4> 4 </option>
                    <option value=5> 5 </option>
            </select>
        </section>  
        
        <section class="create-form__section">
            <label for="description">Description </label>
            <textarea class="create-form__input create-form__input--big" name="description" id="description" type="textarea"></textarea>
        </section>

<button class="create-form__button" type="submit">Submit</button>

</form>

</article>
@endsection