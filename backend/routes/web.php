<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\SellersController::class, 'index']);

Route::get('/sellers', [\App\Http\Controllers\SellersController::class, 'index'])->name('sellers.index');
Route::post('/sellers', [\App\Http\Controllers\SellersController::class, 'store'])->name('sellers.store');
Route::get('/sellers/create', [\App\Http\Controllers\SellersController::class, 'create'])->name('sellers.create');
Route::get('/sellers/{id}', [\App\Http\Controllers\SellersController::class, 'show'])->name('sellers.show');
Route::patch('/sellers/{id}', [\App\Http\Controllers\SellersController::class, 'update'])->name('sellers.update');
Route::delete('/sellers/{id}', [\App\Http\Controllers\SellersController::class, 'destroy'])->name('sellers.destroy');
Route::get('/sellers/{id}/edit', [\App\Http\Controllers\SellersController::class, 'edit'])->name('sellers.edit');
