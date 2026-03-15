<?php

use App\Http\Controllers\DocumentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;


Route::get('/', [PublicController::class, 'Home'])->name('home');
Route::get('/documenti', [DocumentController::class, 'Documenti'])->middleware('auth')->name('documenti');

