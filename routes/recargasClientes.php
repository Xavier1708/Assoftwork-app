<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NumeroRecargaController;


Route::get('/recargas/novo', [NumeroRecargaController::class, 'novo'])->name('recargas.novo');
Route::get('/recargas', [NumeroRecargaController::class, 'operadoras'])->name('recargas.all');
Route::post('/recarga/add', [NumeroRecargaController::class, 'store'])->name('recarga.post');
Route::get('recarga/delete/{recarga}', [NumeroRecargaController::class, 'deleteViews'])->name('admin.deleteViewsRecarga');
