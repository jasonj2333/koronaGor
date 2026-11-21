@extends('layouts.korona')

@section('tytul', 'Start')

@section('content')
    <section class="powitanie">
        <h1>Korona Gór Polski</h1>
        <p class="lead">
            28 szczytów, po jednym z każdego pasma — od Rysów po Łysicę.
            Zapisuj swoje wejścia i sprawdzaj, ile brakuje do zamknięcia Korony.
        </p>

        @auth
            <p>Cześć, {{ auth()->user()->name }}! Wybierz szczyt i zapisz wejście.</p>
            <p class="przyciski">
                <a class="przycisk przycisk-drugi" href="{{ route('szczyty.index') }}">Lista szczytów</a>
            </p>
        @else
            <p class="przyciski">
                <a class="przycisk przycisk-drugi" href="{{ route('szczyty.index') }}">Przeglądaj szczyty</a>
                <a class="przycisk-jasny" href="{{ route('register') }}">Załóż konto</a>
            </p>
        @endauth
    </section>

    <div class="fakty">
        <div class="fakt"><strong>28</strong>szczytów w Koronie</div>
        <div class="fakt"><strong>2499 m</strong>Rysy — najwyższy</div>
        <div class="fakt"><strong>614 m</strong>Łysica — najniższa</div>
    </div>
@endsection