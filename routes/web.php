<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/services', function () {
    return view('services');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\ServicesController::class, 'showAllCategories']);
Route::get('/welcome', [App\Http\Controllers\ServicesController::class, 'showAllCategories']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'showCategories'])->name('home');

Route::get('/admin/services', [App\Http\Controllers\HomeController::class, 'showCategories'])->name('services');
Route::get('/admin/services/create', [App\Http\Controllers\HomeController::class, 'adminCreateCategory'])->name('adminCreateCategory');
Route::post('/admin/services/store', [App\Http\Controllers\HomeController::class, 'adminCategoryStore'])->name('adminCategoryStore');
Route::get('/admin/services/edit/{id}', [App\Http\Controllers\HomeController::class, 'adminEditCategory'])->name('adminEditCategory');
Route::post('/admin/services/update/{id}', [App\Http\Controllers\HomeController::class, 'adminCategoryUpdate'])->name('adminCategoryUpdate');
Route::get('/admin/services/delete/{id}', [App\Http\Controllers\HomeController::class, 'adminDeleteCategory'])->name('adminDeleteCategory');
Route::post('/admin/services/destroy/{id}', [App\Http\Controllers\HomeController::class, 'adminCategoryDestroy'])->name('adminCategoryDestroy');

