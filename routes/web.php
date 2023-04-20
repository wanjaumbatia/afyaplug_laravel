<?php

use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;



Route::get('/', function () {
    return view('welcome');
});

Route::prefix('users')->middleware(['auth'])->group(function () {
    Route::get('/', [UsersController::class, 'index'])->name('users.index');
    Route::post('/invite', [UsersController::class, 'invite'])->name('users.invite');
    Route::get('/change_status/{id}', [UsersController::class, 'change_status'])->name('users.change_status');
});

Route::prefix('settings')->middleware(['auth'])->group(function () {
    Route::get('/profile', [CompanyProfileController::class, 'index'])->name('company.profile');
    Route::post('/profile/store', [CompanyProfileController::class, 'store'])->name('company.store');
});

Route::prefix('roles')->middleware(['auth'])->group(function () {
    Route::get('/', [RolesController::class, 'index'])->name('roles.index');
    Route::post('/', [RolesController::class, 'store'])->name('roles.store');
    Route::get('/{id}', [RolesController::class, 'show'])->name('roles.show');
    Route::delete('/:id', [RolesController::class, 'destroy'])->name('roles.destroy');
});

Route::prefix('products')->middleware(['auth'])->group(function () {
    Route::get('/', [ProductsController::class, 'index'])->name('products.index');
    Route::post('/', [ProductsController::class, 'store'])->name('products.store');
});

Route::prefix('notifications')->middleware(['auth'])->group(function () {
    Route::get('/emails', [NotificationsController::class, 'emails'])->name('notifications.emails');
    Route::get('/sms', [NotificationsController::class, 'sms'])->name('notifications.sms');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
