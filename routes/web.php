<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/',[ArsipController::class,'index']);
Route::get('/tambah-arsip',[ArsipController::class,'show']);
Route::get('/edit-arsip/{id}',[ArsipController::class,'edit']);
Route::post('/edit-arsip/{id}',[ArsipController::class,'create']);
Route::get('/surat/{id}',[ArsipController::class,'lihat']);
Route::delete('/hapus/{id}',[ArsipController::class,'destroy']);
Route::post('/tambah-arsip',[ArsipController::class,'store']);
Route::get('/unduh/{id}',[ArsipController::class,'download']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/tambah-kategori', [KategoriController::class, 'show']);
Route::post('/tambah-kategori', [KategoriController::class, 'store']);
Route::delete('/hapus-kategori/{id}', [KategoriController::class, 'destroy']);

Route::get('/edit-kategori/{id}', [KategoriController::class, 'edit']);
Route::post('/edit-kategori/{id}', [KategoriController::class, 'update']);

Route::get('/about', function () {
    return view('about');
});




