@extends('default')


@section('header')
<header class="header">
        <nav class="navigation">
        <figure class="logo__figure">
            <img class="logo__image" src="/img/logo.png" alt="logo"/>
        </figure>
            <ul class="navigation__links">
                <li><a href="/applications/received">Ontvangen verzoeken</li>
                <li><a href="/pets/create">Voeg Oppasdier toe</li>
                <li><a href="/pets">Dieren</li>
            </ul>
        </nav>
    </header>
    @endsection