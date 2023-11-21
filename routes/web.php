<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [TodoController::class, 'index'])->name('index');

Route::get('/create', [TodoController::class, 'create'])->name('create');

Route::post('/', [TodoController::class, 'store'])->name('store');

Route::get('/details/{id}', [TodoController::class, 'details'])->name('details');

Route::get('/edit/{id}', [TodoController::class, 'edit'])->name('edit');

Route::put('/update/{id}', [TodoController::class, 'update'])->name('update');

Route::delete('/delete/{id}', [TodoController::class, 'delete'])->name('delete');
