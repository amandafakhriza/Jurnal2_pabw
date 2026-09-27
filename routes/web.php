<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/', [LaporanController::class, 'index'])
    ->name('laporan.form');

Route::post('/laporan', [LaporanController::class, 'store'])
    ->name('laporan.store');


