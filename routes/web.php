<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('sobre');

Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/{id}', [ProdutoController::class, 'show'])->name('produtos.show');

Route::view('/cadastro', 'pages.cadastro')->name('cadastro');
Route::view('/login', 'pages.login')->name('login');


Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/clientes', [AdminController::class, 'clientesIndex'])->name('admin.clientes.index');
    Route::get('/clientes/{id}', [AdminController::class, 'clienteShow'])->name('admin.clientes.show');
});