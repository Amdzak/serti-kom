<?php

use App\Http\Controllers\ArsipController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ArsipController::class,'index']);
Route::get('/tambah-arsip',[ArsipController::class,'show']);

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/tambah-kategori', [KategoriController::class, 'show']);

Route::get('/edit-kategori', [KategoriController::class, 'edit']);

Route::get('/about', function () {
    return view('about');
});




