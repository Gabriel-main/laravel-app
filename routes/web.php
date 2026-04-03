<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\GastosController;

Route::get('/usuario/{name}', [UsuarioController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('pagina-usuario-index');

Route::prefix('dashboard')->group(function () {
    Route::view('/', 'dashboard')
        ->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/mis-gastos', [GastosController::class, 'index'])
        ->middleware(['auth', 'verified'])->name('gastos');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
