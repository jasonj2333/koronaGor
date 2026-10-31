<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SzczytController;

Route::get('/', function () {
    return view('start');
})->name('start');

Route::get('/szczyty', [SzczytController::class, 'index'])->name("szczyty.index");
Route::get('/szczyty/{slug}', [SzczytController::class, 'show'])->name("szczyty.show");
Route::get('/skladnia', [SzczytController::class, 'skladnia'])->name("skladnia");
