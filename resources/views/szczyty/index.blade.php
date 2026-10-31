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

    <form action="{{ route('plan.store') }}" method="post" class="formularz">
        @csrf
        <label>Szczyt
            <select name="slug" id="slug">
                @foreach($szczyty as $szczyt)
                    <option value="{{ $szczyt['slug'] }}" @selected(old('slug') == $szczyt['slug'])>{{ $szczyt['nazwa'] }}</option>
                @endforeach
            </select>
        </label>
        @error('slug')
            <p class="blad">{{ $message }}</p>
        @enderror

        <label>Data zdobycia
            <input type="date" name="data" id="data" value="{{ old('data') }}">
        </label>
        @error('data')
            <p class="blad">{{ $message }}</p>
        @enderror

        <label>Notatka
            <input type="text" name="notatka" id="notatka" value="{{ old('notatka') }}">
        </label>
        @error('notatka')
            <p class="blad">{{ $message }}</p>
        @enderror
        <button type="submit">Zapisz plan</button>
    </form>
@endsection

