<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\frontend\HomeController;
use \App\Http\Controllers\frontend\ContactController;
use \App\Http\Controllers\frontend\ServiceController;
use \App\Http\Controllers\frontend\AboutController;
use \App\Http\Controllers\frontend\PortfolioController;
use \App\Http\Controllers\frontend\TeamController;

use \App\Http\Controllers\backend\DashboardController;
use \App\Http\Controllers\backend\DepartmentController;

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
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')->name('backend.index');
});

Route::controller(DepartmentController::class)->group(function () {
    Route::get('/departments/list', 'index')
        ->name('backend.contents.departments.list')
        ->defaults('action', 'list');

    Route::get('/departments/create', 'index')
        ->name('backend.contents.departments.create')
        ->defaults('action', 'create');

    Route::get('/departments/update', 'index')
        ->name('backend.contents.departments.update')
        ->defaults('action', 'update');

    Route::get('/departments/detail', 'index')
        ->name('backend.contents.departments.detail')
        ->defaults('action', 'detail');
});
