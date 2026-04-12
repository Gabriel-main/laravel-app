<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\GastosController;
use App\Http\Controllers\PresupuestoController;
use App\Http\Controllers\ReporteController;


Route::prefix('dashboard')->group(function () {
    Route::get('/', [UsuarioController::class, 'index'])
        ->middleware(['auth', 'verified'])->name('inicio');
    Route::get('/mis-gastos', [GastosController::class, 'index'])
        ->middleware(['auth', 'verified'])->name('gastos');
    Route::get('/mis-presupuestos', [PresupuestoController::class, 'index'])
        ->middleware(['auth', 'verified'])->name('presupuestos');
    Route::get('/reportes', [ReporteController::class, 'index'])
        ->middleware(['auth', 'verified'])->name('reportes');
});

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
