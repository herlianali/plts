<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Home\PortoController::class, 'index']);
Route::name('.')->group(function () {
    Route::get('/simulasi_langganan', [App\Http\Controllers\Home\PortoController::class, 'langganan'])->name('simulasi_langganan');
    Route::post('/simulasi_langganan', [App\Http\Controllers\Home\PortoController::class, 'langganan_proses'])->name('simulasi_langganan.proses');
    Route::post('/unduh', [App\Http\Controllers\Home\PortoController::class, 'unduh'])->name('unduh');
    Route::get('/unduh', [App\Http\Controllers\Home\PortoController::class, 'unduh'])->name('unduh.print');
});
