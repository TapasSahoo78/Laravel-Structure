<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
    Route::middleware(['role:user'])->group(function () {
    });
});
