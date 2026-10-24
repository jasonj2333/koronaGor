<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korona Gór Polskich - {{ $szczyt['nazwa'] }}</title>
</head>
<body>
    <a href="{{ route('szczyty.index') }}">Lista szczytów</a>
    <h1>{{ $szczyt['nazwa'] }}</h1>
    <p>Pasmo: {{ $szczyt['pasmo'] }}</p>
    <p>Wysokość: {{ $szczyt['wysokosc'] }} m n.p.m.</p>
    

</body>
</html>