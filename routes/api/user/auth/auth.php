<?php

use Dangkhoa\Plugins\User\src\Http\Controllers\Api\User\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->as('auth.')->group(function () {
    Route::middleware('auth:sanctum')->group(function () {

    });

    Route::get('login', ['login'])->name('login');
});
