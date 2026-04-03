<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\GastosController;


Route::prefix('dashboard')->group(function () {
    Route::get('/', [UsuarioController::class, 'index'])
        ->middleware(['auth', 'verified'])->name('inicio');
    Route::get('/mis-gastos', [GastosController::class, 'index'])
        ->middleware(['auth', 'verified'])->name('gastos');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
