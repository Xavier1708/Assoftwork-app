<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


// ROUTAS PARA CLIENTES
// salvar
Route::get('/clientes', [ClienteController::class, 'all'])->name('admin.all');
Route::get('/clientes/novo', [ClienteController::class, 'novo'])->name('novo');
Route::post('/clientes/post', [ClienteController::class, 'post'])->name('post');
// actualizar
Route::get('cliente/actualizar/{cliente}', [ClienteController::class, 'showUpdateForm'])->name('admin.update');
Route::put('cliente/clientes/{cliente}', [ClienteController::class, 'update'])->name('admin.updateCliente');
Route::get('cliente/delete/{cliente}', [ClienteController::class, 'deleteViews'])->name('admin.deleteViews');

