<?php

use App\Http\Controllers\CareerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', function () {
        return view('layouts.dashboard');
    })->name('dashboard');

    Route::prefix('careers')->name('careers.')->controller(CareerController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('{career}/edit', 'edit')->name('edit');
        Route::put('{career}', 'update')->name('update');
        Route::delete('{career}', 'destroy')->name('destroy');
    });
});
