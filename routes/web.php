<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ArsipController::class,'index']);
Route::get('/tambah-arsip',[ArsipController::class,'show']);
Route::delete('/hapus/{id}',[ArsipController::class,'destroy']);
Route::post('/tambah-arsip',[ArsipController::class,'store']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/tambah-kategori', [KategoriController::class, 'show']);
Route::post('/tambah-kategori', [KategoriController::class, 'store']);
Route::delete('/hapus-kategori/{id}', [KategoriController::class, 'destroy']);

Route::get('/edit-kategori', [KategoriController::class, 'edit']);

Route::get('/about', function () {
    return view('about');
});




