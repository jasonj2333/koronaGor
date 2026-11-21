@extends('layouts.korona')

@section('tytul', $szczyt->nazwa)


@section('content')
    <a href="{{ route('szczyty.index') }}">Lista szczytów</a>
    <img class="zdjecie" src="{{ asset('img/szczyty/' . $szczyt->slug . '.jpg') }}" alt="{{ $szczyt->nazwa }}">
    <h1>{{ $szczyt->nazwa }}</h1>
    <p>Pasmo: {{ $szczyt->pasmo->nazwa }}</p>
    <p>Wysokość: {{ $szczyt->wysokosc }} m n.p.m.</p>
    
@endsection