@extends('layout.korona')

@section('tytul', 'Lista szczytów')

@section('content')
    <h1>Szczyty Korony</h1>
    @forelse($szczyty as $szczyt)
        <x-karta :szczyt="$szczyt" />
        {{-- <x-karta :szczyt="$szczyt">
            <p>Opis szczytu: dasdasdsadasdasdasda</p>
        </x-karta>  --}}
    @empty
        <p>Brak szczytów na liście</p>
    @endforelse
@endsection

