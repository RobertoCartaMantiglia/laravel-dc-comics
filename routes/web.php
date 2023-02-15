<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ComicController as ComicController;
use App\Http\Controllers\Guest\HomePageController as HomePageController;
use Psy\Command\EditCommand;

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

Route::get('/', [HomePageController::class, 'home'])->name('home');

Route::get('/products', [ComicController::class, 'index'])->name('products.index');
Route::get('/products/create', [ComicController::class, 'create'])->name('products.create');
Route::post('/products/store', [ComicController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ComicController::class, 'show'])->name('products.show');
Route::get('products/{id}/edit', [ComicController::class, 'edit'])->name('products.edit');
Route::put('products/{id}', [ComicController::class, 'update'])->name('products.update');
Route::delete('products/{id}', [ComicController::class, 'delete'])->name('products.destroy');


// Route::resource('products', ComicController::class);
