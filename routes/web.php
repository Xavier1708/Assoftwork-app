<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\NumeroRecargaController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DefaultController::class, 'home'])->name('layout.home');


// ROUTAS PARA CLIENTES
Route::get('/clientes', [ClienteController::class, 'all'])->name('admin.all');

Route::get('/clientes/novo', [ClienteController::class, 'novo'])->name('novo');
Route::post('/clientes/post', [ClienteController::class, 'post'])->name('post');

// ROUTAS PARA NUMEROS POR RECARGAS
Route::get('/recargas/novo', [NumeroRecargaController::class, 'novo'])->name('recargas.novo');
Route::get('/recargas/novo', [NumeroRecargaController::class, 'novo'])->name('recargas.all');

Route::post('/recarga/add', [NumeroRecargaController::class, 'store'])->name('recarga.post');
