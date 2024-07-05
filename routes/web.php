<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('arsip');
});

Route::get('/tambah-arsip', function () {
    return view('tambah-arsip');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/tambah-kategori', function () {
    return view('tambah-kategori');
});

Route::get('/edit-kategori', function () {
    return view('edit-kategori');
});

Route::get('/about', function () {
    return view('about');
});
