<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista szczytów</title>
</head>
<body>
    <a href="{{ route('start') }}">Strona startowa</a>
    <h1>Szczyty Korony</h1>
    @forelse($szczyty as $szczyt)
        <h2>
            <a href="{{ route('szczyty.show', $szczyt['slug']) }}">
                {{ $szczyt['nazwa'] }}
            </a>
        </h2>
        <p>{{ $szczyt['pasmo'] }} - {{ $szczyt['wysokosc'] }}</p>
    @empty
        <p>Brak szczytów na liście</p>
    @endforelse

</body>
</html>