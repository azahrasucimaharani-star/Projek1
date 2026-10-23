<?php

use App\Http\Controllers\BirthdayController;
use App\Http\Controllers\JourneyController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\SandiKeduaController;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingController::class)->name('landing');
Route::post('/periksa', [LandingController::class, 'periksa'])->name('landing.periksa');
Route::get('/kedua', SandiKeduaController::class)->name('gate.second');
Route::post('/kedua/periksa', [SandiKeduaController::class, 'periksa'])->name('gate.second.periksa');
Route::get('/birthday', BirthdayController::class)->name('birthday');
Route::get('/journey', JourneyController::class)->name('journey');
Route::view('/cards', 'cards')->name('cards');
