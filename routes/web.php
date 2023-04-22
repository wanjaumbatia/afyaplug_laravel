<?php

use App\Http\Controllers\AccountingController;
use App\Http\Controllers\CompanyProfileController;
use App\Http\Controllers\NotificationsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;



Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['check.profile'])->group(function () {

    Route::prefix('users')->middleware(['auth'])->group(function () {
        Route::get('/', [UsersController::class, 'index'])->name('users.index');
        Route::post('/invite', [UsersController::class, 'invite'])->name('users.invite');
        Route::get('/change_status/{id}', [UsersController::class, 'change_status'])->name('users.change_status');

        Route::get('/profile', [UsersController::class, 'profile'])->name('users.profile');
        Route::get('/staff/open', [UsersController::class, 'open_list'])->name('users.staff.open');
    });

    Route::prefix('settings')->middleware(['auth'])->group(function () {
        Route::get('/profile', [CompanyProfileController::class, 'index'])->name('company.profile');
        Route::post('/profile/store', [CompanyProfileController::class, 'store'])->name('company.store');
    });

    Route::prefix('roles')->middleware(['auth'])->group(function () {
        Route::get('/', [RolesController::class, 'index'])->name('roles.index');
        Route::post('/', [RolesController::class, 'store'])->name('roles.store');
        Route::get('/{id}', [RolesController::class, 'show'])->name('roles.show');
        Route::delete('/{id}', [RolesController::class, 'destroy'])->name('roles.destroy');
    });

    Route::prefix('products')->middleware(['auth'])->group(function () {
        Route::get('/', [ProductsController::class, 'index'])->name('products.index');
        Route::post('/', [ProductsController::class, 'store'])->name('products.store');
    });

    Route::prefix('notifications')->middleware(['auth'])->group(function () {
        Route::get('/emails', [NotificationsController::class, 'emails'])->name('notifications.emails');
        Route::get('/sms', [NotificationsController::class, 'sms'])->name('notifications.sms');
    });


    Route::prefix('accounting')->middleware(['auth'])->group(function () {
        Route::get('/', [AccountingController::class, 'index'])->name('accounting.index');
        Route::get('/accounts', [AccountingController::class, 'accounts'])->name('accounting.accounts');
        Route::post('/accounts', [AccountingController::class, 'store_account'])->name('accounting.accounts.store');

        Route::prefix('settings')->group(function () {
            Route::get('/entity', [AccountingController::class, 'entity'])->name('accounting.settings.entity');
            Route::get('/currency', [AccountingController::class, 'currency'])->name('accounting.settings.currency');
            Route::post('/currency', [AccountingController::class, 'store_currency'])->name('accounting.settings.currency.store');
            Route::get('/vat', [AccountingController::class, 'vat_page'])->name('accounting.settings.vat');
            Route::post('/vat', [AccountingController::class, 'store_vat'])->name('accounting.settings.vat.store');
            Route::get('/period', [AccountingController::class, 'period_page'])->name('accounting.settings.period');
            Route::post('/period', [AccountingController::class, 'store_period'])->name('accounting.settings.period.store');
            Route::get('/categories', [AccountingController::class, 'categories'])->name('accounting.settings.categories');
            Route::post('/categories', [AccountingController::class, 'store_category'])->name('accounting.settings.category.store');
        });
    });

    Route::get('/users/mark-notification/{id}', [UsersController::class, 'markNotification'])->name('users.markNotification');
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/users/staff/update_profile', [UsersController::class, 'update_staff_profile'])->name('users.staff.update_staff_profile');
Route::post('/users/staff/update_profile', [UsersController::class, 'update_staff_profile_details'])->name('users.staff.update_staff_profile_details');
    
Auth::routes();
