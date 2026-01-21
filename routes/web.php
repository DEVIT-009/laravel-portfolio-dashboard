<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\TeamController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\DepartmentController;

// Frontend
Route::controller(HomeController::class) -> group(function () {
    Route::get('/', 'index') -> name('home.index');
});
Route::controller(AboutController::class) -> group(function () {
    Route::get('/about', 'index') -> name('about.index');
});
Route::controller(ContactController::class) -> group(function () {
    Route::get('/contact', 'index') -> name('contact.index');
});
Route::controller(ServiceController::class) -> group(function () {
    Route::get('/service', 'index') -> name('service.index');
});
Route::controller(PortfolioController::class) -> group(function () {
    Route::get('/portfolio', 'index') -> name('portfolio.index');
});
Route::controller(TeamController::class) -> group(function () {
    Route::get('/team', 'index') -> name('team.index');
});

// Backend
Route::prefix('admin/v1')->name('backend.')->group(function () {

    // Dashboard
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('index');
    });

    // Departments
    Route::controller(DepartmentController::class)
        ->prefix('/departments')
        ->name('department.')
        ->group(function () {
            // List
            Route::get('/', 'index')->name('index');

            // Create
            Route::get('/create', 'create')->name('create'); //Page
            Route::post('/', 'store')->name('store'); // Process

            // Detail
            Route::get('/{department}', 'detail')->name('detail');

            // Update
            Route::get('/{department}/edit', 'edit')->name('edit'); // Page
            Route::put('/{department}', 'update')->name('update'); // Process

            // Delete
            Route::delete('/{department}', 'destroy')->name('destroy');
        });
});
