<?php

use App\Http\Controllers\Admin\UsuarioController;
use App\Http\Controllers\Admin\SupportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('supports/{id}/edit', [SupportController:: class, 'edit'])->name('support.edit');
Route::get('supports/', [SupportController:: class, 'index'])->name('support.index');
Route::get('supports/create/', [SupportController:: class, 'create'])->name('support.create');
Route::post('supports/', [SupportController:: class, 'store'])->name('support.store');
Route::get('supports/{id}', [SupportController:: class, 'show'])->name('support.show');
Route::put('supports/{id}', [SupportController:: class, 'update'])->name('support.update');
Route::delete('supports/{id}', [SupportController:: class, 'destroy'])->name('support.destroy');

// Rotas para o Usuario

Route::get('usuarios/', [UsuarioController:: class, 'index'])->name('usuario.index');
Route::get('usuarios/create/', [UsuarioController:: class, 'create'])->name('usuario.create');
Route::post('usuarios/', [UsuarioController:: class, 'store'])->name('usuario.store');
Route::get('usuarios/{id}', [UsuarioController:: class, 'show'])->name('usuario.show');
