<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/usuario/{name}', [UsuarioController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('pagina-usuario-index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
