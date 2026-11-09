<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpdeskController;
use App\Http\Controllers\IdadeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\NotasController;
use App\Http\Controllers\PooController;

Route::get('/', function () {
    return view('portifolio');
});

Route::get('/helpdesk', [HelpdeskController::class, 'index'])->name('helpdesk');

Route::get('/idade', [IdadeController::class, 'index'])->name('idade');

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/json', [JsonController::class, 'index'])->name('json');

Route::get('/notas', [NotasController::class, 'index'])->name('notas');

Route::get('/poo', [PooController::class, 'index'])->name('poo');

Route::post('/helpdesk', [HelpdeskController::class, 'salvar'])->name('helpdesk.salvar');

