@extends('default')

@section('title')
    {{'All Pets'}}
@endsection

    @section('content')
        <article class="filters">
            <p class="filters__title"> Filters </p>
            <section>
                <label class="filter__label" for="birds">Birds</label>
                <input class="filter__checkbox" id="birds" name="birds" type="checkbox" />
            </section>
            <section>
                <label class="filter__label" for="cats">Cats</label>
                <input class="filter__checkbox" id="cats" name="cats" type="checkbox" />
            </section>
            <section>
                <label class="filter__label" for="dogs">Dogs</label>
                <input class="filter__checkbox" id="dogs" name="dogs" type="checkbox" />
            </section>
            <section>
                <label class="filter__label" for="rabbits">Rabbits</label>
                <input class="filter__checkbox" id="rabbits" name="rabbits" type="checkbox" />
            </section>
    </article>
    <ul class="u-grid ">
        @foreach($pets as $pet)
            @include('pets.components.petCard--index')
        @endforeach
    </ul>
    @endsection