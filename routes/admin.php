<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MateriaController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ImageController;
use Illuminate\Support\Facades\Artisan;

Route::get('', [HomeController::class, 'index'])->name('admin.index');

Route::resource('areas', AreaController::class)->names('admin.areas');

Route::resource('categories', CategoryController::class)->names('admin.categories');

Route::resource('materias', MateriaController::class)->names('admin.materias');

Route::resource('posts', PostController::class)->names('admin.posts');

Route::resource('images', ImageController::class)->names('admin.images');

Route::get('linkstorage', function () {
    Artisan::call('storage:link');});