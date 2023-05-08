<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Dashboard\HomeController::class, 'index']);
