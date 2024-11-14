<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);  // Apunta al HomeController

// Otras rutas
Route::get('/areas/matematicas', [AreasController::class, 'matematicas'])->name('areas.matematicas');
Route::get('/areas/politica', [AreasController::class, 'politica'])->name('areas.politica');
Route::get('/home', [HomeController::class, 'index']);