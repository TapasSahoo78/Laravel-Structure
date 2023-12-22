<?php

use App\Http\Controllers\Admin\Subscription\SubscriptionController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function () {

    // Route::middleware(['role:admin'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::group(['prefix' => 'users', 'as' => 'user.'], function () {
            Route::get('/', 'index')->name('list');
            Route::match(['get', 'post'], 'add-users', 'addUser')->name('add');
            Route::match(['get', 'post'], 'edit-users/{id}', 'editUser')->name('edit');
            Route::post('user-status', 'statusUser')->name('status');
            Route::get('delete-user/{id}', 'deleteUser')->name('delete');
        });
    });
    Route::namespace('Subscription')->controller(SubscriptionController::class)->prefix('subscription')->as('subscriptions.')->group(function () {
        Route::get('/', 'index')->name('list');
        Route::match(['get', 'post'], '/add', 'add')->name('add');
    });
    // });
});
