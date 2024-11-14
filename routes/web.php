<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreasController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/areas', [AreasController::class, 'index']);
Route::get('/areas/matematicas', [AreasController::class, 'matematicas'])->name('areas.matematicas');
Route::get('/areas/politica', [AreasController::class, 'politica'])->name('areas.politica');
Route::get('/areas/arte', [AreasController::class, 'arte'])->name('areas.arte');
Route::get('/areas/quimica', [AreasController::class, 'quimica'])->name('areas.quimica');
Route::get('/areas/lectura', [AreasController::class, 'lectura'])->name('areas.lectura');
Route::get('/areas/etica', [AreasController::class, 'etica'])->name('areas.etica');
Route::get('/areas/religion', [AreasController::class, 'religion'])->name('areas.religion');
Route::get('/areas/informatica', [AreasController::class, 'informatica'])->name('areas.informatica');

Route::get('/areas', function () {
    return view('html.areas.areas');
});
