<?php

use App\Http\Controllers\ConteectController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CantoController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CommandsController;

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

Route::get('/', [ProdutoController::class, 'index'])->name('home');

Route::get('/contato', [ConteectController:: class, 'index'])->name('app.index');
// Route::get('/produto', [ProdutoController::class, 'index'])->name('produto');
Route::get('/form', [ProdutoController:: class, 'form'])->name('form');
// Route::post('/contato', [ConteectController:: class, 'store'])->name('app.store');
Route::post('/form', [ProdutoController:: class, 'store'])->name('store');
Route::delete('/delet/{id}', [ProdutoController::class, 'delet'])->name('delet');
Route::get('/edit/{id}', [ProdutoController::class, 'show'])->name('edit');
Route::put('/edit/{id}/put', [ProdutoController::class, 'updat'])->name('edit-put');

Route::post('/contatos', [CantoController:: class, 'create'])->name('app.create');

Route::get('/contatos', [CantoController::class, 'formContatos'])->name('formContatos');
Route::get('/', [ProdutoController::class, 'busca'])->name('busca');
//Route::get('/show-controllers-methods', [CommandsController::class, 'getControllersMethods']);
