@extends('layout.korona')

@section('tytul', 'Strona startowa')

@section('content')
    <h1>Korona Gór Polskich</h1>
    <p>Tu zapiszesz zdobyte szczyty</p>
    <a href="{{ route('szczyty.index') }}">Lista szczytów</a>
@endsection
