<?php

use App\Http\Controllers\ConteectController;
use App\Http\Controllers\ProdutoController;
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

Route::get('/', [ConteectController::class, 'home'])->name('home');

Route::get('/contato', [ConteectController:: class, 'index'])->name('app.index');
Route::get('/form', [ProdutoController:: class, 'form'])->name('form');
Route::post('/contato', [ConteectController:: class, 'store'])->name('app.store');
Route::post('/form', [ProdutoController:: class, 'store'])->name('store');
