<?php

namespace App\Http\Controllers;

use App\Models\KategoriSurat;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kategori');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(KategoriSurat $kategoriSurat)
    {
        return view('tambah-kategori');
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KategoriSurat $kategoriSurat)
    {
        return view('edit-kategori');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriSurat $kategoriSurat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KategoriSurat $kategoriSurat)
    {
        //
    }
}
