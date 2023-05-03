<?php

use App\Http\Controllers\AccountingController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\StaffController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

use function Termwind\render;


Route::middleware(['auth'])->group(function () {
   
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
Auth::routes();
