<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SzczytController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('start');
})->name('start');

Route::get('/szczyty', [SzczytController::class, 'index'])->name('szczyty.index');
Route::get('/szczyty/{szczyt}', [SzczytController::class, 'show'])->name('szczyty.show');
Route::get('/skladnia', [SzczytController::class, 'skladnia'])->name('skladnia');
Route::post('/plan', [SzczytController::class, 'zapiszPlan'])->name('plan.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
