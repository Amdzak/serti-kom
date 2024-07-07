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
        $data = KategoriSurat::with('ArsipSurat')->get();

        $title = 'Alert!';
        $text = "Apakah anda yakin ingin menghapus kategori ini?";
        confirmDelete($title, $text);

        return view('kategori',[
            'data' => $data,
        ]);
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
        $validated = $request->validate([
            'judul' => 'required',
            'nama_kategori' => 'required|unique:kategori_surat',
        ]);

        if($validated){
            $kategori = new KategoriSurat();
            $kategori->nama_kategori = $request->nama_kategori;
            $kategori->keterangan = $request->judul;
            $kategori->save();
    
            return redirect('/kategori')->with('success','Berhasil menambahkan Kategori');
        }

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
    public function edit($id)
    {
        $file = KategoriSurat::findOrFail($id);

        return view('edit-kategori',[
            'data' => $file,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KategoriSurat $kategoriSurat)
    {
        $file = KategoriSurat::findOrFail($request->id);

        $validated = $request->validate([
            'keterangan' => 'required',
            'nama_kategori' => 'required',
        ]);

        if($validated){
            $file->nama_kategori = $request->nama_kategori;
            $file->keterangan = $request->keterangan;
            $file->update();
    
            return redirect('/kategori')->with('success','Berhasil mengedit Kategori');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $file = KategoriSurat::findOrFail($id);
        // dd($file);
        //delete post
        $file->delete();
        return redirect('/kategori')->with('success','Berhasil menghapus Kategori');
    }
}
