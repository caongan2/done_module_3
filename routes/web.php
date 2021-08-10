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


Route::get('/', [\App\Http\Controllers\AgencyController::class, 'index'])->name('list');
Route::prefix('/agency')->group(function (){
    Route::get('create', [\App\Http\Controllers\AgencyController::class, 'create'])->name('create');
    Route::post('store', [\App\Http\Controllers\AgencyController::class, 'store'])->name('store');
    Route::get('delete/{id}', [\App\Http\Controllers\AgencyController::class, 'destroy'])->name('delete');
    Route::get('edit/{id}', [\App\Http\Controllers\AgencyController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [\App\Http\Controllers\AgencyController::class, 'update'])->name('update');
    Route::get('search', [\App\Http\Controllers\AgencyController::class, 'search'])->name('search');
});
