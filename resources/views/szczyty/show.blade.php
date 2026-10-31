@extends('layout.korona')

@section('tytul', $szczyt['nazwa'])


@section('content')
    <a href="{{ route('szczyty.index') }}">Lista szczytów</a>
    <h1>{{ $szczyt['nazwa'] }}</h1>
    <p>Pasmo: {{ $szczyt['pasmo'] }}</p>
    <p>Wysokość: {{ $szczyt['wysokosc'] }} m n.p.m.</p>
    
@endsection