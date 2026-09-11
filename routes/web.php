<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [HomeController::class, 'menu'])->name('menu');
Route::get('/cats', [HomeController::class, 'cats'])->name('cats');
Route::get('/reserve', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reserve', [ReservationController::class, 'store'])->name('reservations.store');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
