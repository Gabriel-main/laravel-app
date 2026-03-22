<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\IndexController;

Route::get('/',[IndexController::class, 'index'])->name('pagina-index');