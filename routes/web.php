<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicController as ComicController;
use App\Http\Controllers\Guest\HomePageController as HomePageController;

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

Route::get('home', [HomePageController::class, 'home'])->name('home');

// Route::get('/', [ComicController::class, 'index'])->name('products.index');
// Route::get('/products/create', [ComicController::class, 'create'])->name('products.create');
// Route::post('/products/store', [ComicController::class, 'store'])->name('products.store');
// Route::get('/products/{id}', [ComicController::class, 'show'])->name('products.show');


Route::resource('products', ComicController::class);
