<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\Frontendcontroller;
use App\Http\Controllers\Frontend\UserControler;

//landing page
Route::get('/', [Frontendcontroller::class, 'index'])->name('landing.page');

//dashboard
Route::get('/dashboard', [Frontendcontroller::class, 'dashboard'])->name('dashboard.index');

// Rotas da entidade cozinha
Route::get('/cozinha', [Frontendcontroller::class, 'cozinha'])->name('cozinha.index');
Route::get('/cozinha/create', [Frontendcontroller::class, 'createCozinha'])->name('cozinha.create');

// Rotas da entidade menu
Route::get('/menu', [Frontendcontroller::class, 'menu'])->name('menu.index');
Route::get('/menu/create', [Frontendcontroller::class, 'createMenu'])->name('menu.create');

// Rotas da entidade pos
Route::get('/pos', [Frontendcontroller::class, 'pos'])->name('pos.index');

// Rotas da entidade reservas
Route::get('/reservas', [Frontendcontroller::class, 'reservas'])->name('reservas.index');
Route::get('/reservas/create', [Frontendcontroller::class, 'createReservas'])->name('reservas.create');

// Rotas da entidade Users
Route::get('/users', [UserControler::class, 'index'])->name('users.index');
Route::get('/users/create', [UserControler::class, 'create'])->name('users.create');