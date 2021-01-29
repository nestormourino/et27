<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\PostController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactenosController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PostController::class, 'index'])->name('index');

Route::get('anuncios', [PostController::class, 'anuncios'])->name('anuncios');

Route::get('post/{post}', [PostController::class, 'show'])->name('post.show');

Route::get('category/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::get('category/list/{category}', [CategoryController::class, 'list'])->name('category.list');

Route::get('contactenos', function () { return view('contactenos');})->name('contactenos');

Route::get('cooperadora', function () { return view('cooperadora');})->name('cooperadora');

Route::get('estudiantes', function () { return view('estudiantes');})->name('estudiantes');

Route::get('nosotros', function () { return view('nosotros');})->name('nosotros');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () { return view('dashboard');})->name('dashboard');

Route::get('contactanos', [ContactenosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos', [ContactenosController::class, 'store'])->name('contactanos.store');

Route::post('oacontactanos', [ContactenosController::class, 'oastore'])->name('contactanos.oastore');