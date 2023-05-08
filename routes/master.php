<?php

use Illuminate\Support\Facades\Route;

Route::name('.')->group(function () {
    Route::prefix('user')->name('user.')->group(function () {
        Route::resource('/', App\Http\Controllers\Master\UserController::class);
    });
});
