<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('start');
})->name('start');

Route::get('/szczyty', function () {
    $szczyty = [
        ['nazwa' => 'Rysy', 'pasmo'=> 'Tatry', 'wysokosc'=>2499],
        ['nazwa' => 'Babia Góra', 'pasmo'=> 'Beskid Żywiecki', 'wysokosc'=>1725],
        ['nazwa' => 'Śnieżka', 'pasmo'=> 'Karkonosze', 'wysokosc'=>1603],
        ['nazwa' => 'Łysica', 'pasmo'=> 'Góry Świętokrzyskie', 'wysokosc'=>614],
    ];
    return view('szczyty.index', ['szczyty' => $szczyty]);
})->name("szczyty.index");
