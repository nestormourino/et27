<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AreaController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MateriaController;
use App\Http\Controllers\Admin\PostController;

Route::get('', [HomeController::class, 'index'])->name('admin.index');

Route::resource('admin/areas', AreaController::class)->names('admin.areas');

Route::resource('admin/categories', CategoryController::class)->names('admin.categories');

Route::resource('admin/materias', MateriaController::class)->names('admin.materias');

Route::resource('admin/posts', PostController::class)->names('admin.posts');