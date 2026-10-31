<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tytul', 'Korona Gór Polskich')</title>
    <link rel="stylesheet" href="{{ asset('css/korona.css') }}">
</head>
<body>
    <header class="pasek">
        <div class="pasek-wnetrze">
            <a href="{{ route('start') }}" class="znak">Korona Gór Polski</a>
            <nav class="menu">
                <a href="{{ route('start') }}">Start</a>
                <a href="{{ route('szczyty.index') }}">Szczyty</a>
            </nav>
        </div>
    </header>
    <main class="strona">
        @yield('content')
    </main>
</body>
</html>
