<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/a-propos', [PageController::class, 'about'])->name('about');

Route::get('/heure', function () {
    return 'Il est ' . now('Africa/Tunis')->format('H:i:s') . '.';
});

Route::get('/heure-court', fn () => 'Il est ' . now()->format('H:i:s') . '.');

