<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\IndexController;
use App\Http\Controllers\web\DescripcionController;
use App\Http\Controllers\web\DestallesController;

Route::get('/',[IndexController::class, 'index'])->name('pagina-index');
Route::get('/descripcion',[DescripcionController::class, 'index'])->name('pagina-descripcion');
Route::get('/caracteristicas',[DestallesController::class, 'index'])->name('pagina-destalles');



