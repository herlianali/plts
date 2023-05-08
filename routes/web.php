<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('portfolio');
})->name('/');

Route::get('login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::post('login', [App\Http\Controllers\AuthController::class, 'login_process'])->name('login.process');
Route::get('logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

Route::name('portfolio')->prefix('portfolio')->group(__DIR__.'/portfolio.php');
Route::name('dashboard')->prefix('dashboard')->group(__DIR__.'/dashboard.php');
Route::name('master')->prefix('master')->group(__DIR__.'/master.php');
