<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuanganController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ruangans', [RuanganController::class, 'index']);
Route::get('/ruangans/create', [RuanganController::class, 'create']);
Route::post('/ruangans', [RuanganController::class, 'store']);
