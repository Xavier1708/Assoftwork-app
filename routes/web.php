<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;

Route::get('/', [DefaultController::class, 'home'])->name('layout.home');
Route::get('/admin', [DefaultController::class, 'admin'])->name('layout.admin');

// PESQUISA
//Auth::routes();

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
