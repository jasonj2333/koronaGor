@extends('layout.korona')

@section('tytul', 'Składnia blade')

@section('content')
    @php
        $wysokosc = 1700;
        $opis = null;
    @endphp

    <h2>Warunki</h2>
    @if($wysokosc > 2000)
        <p>{{ $wysokosc }} m - próg dwóch tysiecy</p>
    @elseif($wysokosc > 1500)
        <p>{{ $wysokosc }} m - próg półtora tysiąca</p>
    @else
        <p>{{ $wysokosc }} m - próg tysiąca</p>
    @endif

    @unless ($wysokosc >= 2000)
        <p>Nie przekroczyłeś progu dwóch tysięcy</p>
    @endunless

    <h2>@@isset i @@empty</h2>
    @isset($opis)
        <p>{{ $opis }}</p>
    @else
        <p>Brak opisu</p>
    @endisset

    @empty($opis)
        <p>Brak opisu</p>
    @endempty

    <h2>@@foreach</h2>
    @foreach($szczyty as $szczyt)
        <p>{{ $szczyt['nazwa'] }}</p>
    @endforeach


    <h2>Klasa i checkbox</h2>
    @foreach ($szczyty as $szczyt)
        <p @class(['karta', 'wysokosc' => $szczyt['wysokosc'] >= 1000])>
            {{ $szczyt['nazwa'] }} —
            {{ $szczyt['wysokosc'] >= 1000 ? 'od 1000 m' : 'poniżej 1000 m' }}
        </p>
        <label>
            <input type="checkbox" @checked($szczyt['wysokosc'] >= 2000) @disabled(true)>
            próg 2000 m (pole wyłączone, tylko do odczytu przykładu)
        </label>
    @endforeach

    <h2>@@switch</h2>
    <ul>
        @foreach ($szczyty as $szczyt)
            <li>
                {{ $szczyt['nazwa'] }} —
                @switch($szczyt['pasmo'])
                    @case('Tatry')
                        najwyższe pasmo na tej liście
                        @break
                    @case('Karkonosze')
                        Karkonosze
                        @break
                    @default
                        inne pasmo
                @endswitch
            </li>
        @endforeach
    </ul>
@endsection