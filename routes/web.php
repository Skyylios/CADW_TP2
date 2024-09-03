<?php

use App\Http\Controllers\FaitController;
use Illuminate\Support\Facades\Route;

Route::get("/", [FaitController::class, 'accueil'])
    ->name('accueil');

Route::get("/faits", [FaitController::class, 'index'])
    ->name('faits.index');
