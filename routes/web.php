<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DefaultController;

Route::get('/', [DefaultController::class, 'home'])->name('layout.home');

// PESQUISA
//Auth::routes();
