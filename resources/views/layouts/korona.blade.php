<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('tytul', 'Korona Gór Polski')</title>
    <link rel="stylesheet" href="{{ asset('css/korona.css') }}">
</head>
<body>
    <header class="pasek">
        <div class="pasek-wnetrze">
            <a class="znak" href="{{ route('start') }}">Korona Gór Polski</a>
            <nav class="menu">
                <a href="{{ route('start') }}" @class(['aktywny' => request()->routeIs('start')])>Start</a>
                <a href="{{ route('szczyty.index') }}" @class(['aktywny' => request()->routeIs('szczyty.*')])>Szczyty</a>
            </nav>
            <div class="konto">
                @auth
                    <a href="{{ route('dashboard') }}">{{ auth()->user()->name }}</a>
                    <form method="post" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="przycisk-jasny">Wyloguj</button>
                    </form>
                @else
                    <a href="{{ route('login') }}">Logowanie</a>
                    <a href="{{ route('register') }}" class="przycisk-jasny">Rejestracja</a>
                @endauth
            </div>
        </div>
    </header>
    <main class="strona">
        @yield('content')
    </main>
</body>
</html>