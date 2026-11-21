<?php

// Polskie komunikaty dla reguł używanych na kursie.
// Reguły, których tu nie ma, Laravel weźmie z angielskiego (APP_FALLBACK_LOCALE=en).

return [
    'after_or_equal' => 'Pole :attribute musi być datą :date lub późniejszą.',
    'before_or_equal' => 'Pole :attribute musi być datą :date lub wcześniejszą.',
    'boolean' => 'Pole :attribute musi mieć wartość prawda albo fałsz.',
    'confirmed' => 'Pole :attribute i jego powtórzenie muszą być takie same.',
    'current_password' => 'Hasło jest nieprawidłowe.',
    'date' => 'Pole :attribute musi być poprawną datą.',
    'email' => 'Pole :attribute musi być poprawnym adresem e-mail.',
    'exists' => 'Wybrana wartość pola :attribute jest nieprawidłowa.',
    'in' => 'Wybrana wartość pola :attribute jest nieprawidłowa.',
    'integer' => 'Pole :attribute musi być liczbą całkowitą.',
    'lowercase' => 'Pole :attribute musi być zapisane małymi literami.',
    'max' => [
        'numeric' => 'Pole :attribute nie może być większe niż :max.',
        'string' => 'Pole :attribute może mieć najwyżej :max znaków.',
    ],
    'min' => [
        'numeric' => 'Pole :attribute musi wynosić co najmniej :min.',
        'string' => 'Pole :attribute musi mieć co najmniej :min znaków.',
    ],
    'numeric' => 'Pole :attribute musi być liczbą.',
    'required' => 'Pole :attribute jest wymagane.',
    'string' => 'Pole :attribute musi być tekstem.',
    'unique' => 'Taki :attribute jest już zajęty.',

    // Nazwy pól w komunikatach: zamiast "password" Laravel napisze "hasło".
    'attributes' => [
        'name' => 'imię',
        'email' => 'e-mail',
        'password' => 'hasło',
        'current_password' => 'obecne hasło',
        'slug' => 'szczyt',
        'data' => 'data',
        'notatka' => 'notatka',
        'data_zdobycia' => 'data wejścia',
        'osoby' => 'liczba osób',
    ],
];
