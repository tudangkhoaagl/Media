<?php

use Illuminate\Support\Facades\Route;

Route::as('user.')->prefix('user')->group(function () {
    include 'user/auth/auth.php';
});
