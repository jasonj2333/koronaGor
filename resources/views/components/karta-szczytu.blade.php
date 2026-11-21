@props(['szczyt'])

<a href="{{ route('szczyty.show', $szczyt) }}" class="karta">
    <img class="miniatura" src="{{ asset('img/szczyty/' . $szczyt->slug . '.jpg') }}" alt="{{ $szczyt['nazwa'] }}">
    <div class="karta-tresc">
        <h2>{{ $szczyt->nazwa }}</h2>
        <p class="meta">
            {{ $szczyt->pasmo->nazwa }}
            - <span class="wysokosc">{{ $szczyt->wysokosc }} m</span>
        </p>
        {{ $slot }}
    </div>
</a>