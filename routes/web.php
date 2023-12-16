<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', [BukuController::class, 'index']);
Route::get('/buku/create',[BukuController::class, 'create']);
Route::post('/buku/store',[BukuController::class, 'store']);
Route::get('/buku/{id}/edit',[BukuController::class, 'edit']);
Route::put('/buku/{id}',[BukuController::class, 'update']);
Route::delete('/buku/{id}',[BukuController::class, 'destroy']);