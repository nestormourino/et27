<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ContactanosController;
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

//HomeController

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('anuncios', [HomeController::class, 'anuncios'])->name('anuncios');

Route::get('post/{post}', [HomeController::class, 'show'])->name('post.show');

Route::get('estudiantes', [HomeController::class, 'estudiantes'])->name('estudiantes');

//CategoryController

Route::get('category/{category}', [CategoryController::class, 'show'])->name('category.show');

Route::get('category/list/{category}', [CategoryController::class, 'list'])->name('category.list');

//ContactanosController

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');

Route::post('oacontactanos', [ContactanosController::class, 'oastore'])->name('contactanos.oastore');

//Sin controller

Route::get('cooperadora', function () { return view('cooperadora');})->name('cooperadora');

Route::get('nosotros', function () { return view('nosotros');})->name('nosotros');

//CKEditor

Route::post('image/upload', [ImageController::class,'upload'])->name('image.upload');