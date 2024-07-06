<?php

namespace App\Http\Controllers;

use App\Models\ArsipSurat;
use App\Models\KategoriSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ArsipSurat::with('KategoriSurat')->get();
        // dd($data);
        return view('arsip',[
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
            'nomor_surat' => 'required|unique:arsip_surat',
        ]);

        if($validated){
            $surat = new ArsipSurat();
            $surat->nomor_surat = $request->nomor_surat;
            $surat->id_kategori = $request->kategori;
            $surat->judul = $request->judul;
            $surat->file = $request->file;
            $surat->waktu_arsip = date('Y-m-d H:i:s');;
            $surat->save();

            return redirect('/')->with('success','Berhasil menambahkan arsip');
        }
        
    }

    /**
     * Display the specified resource.
     */
    public function show(ArsipSurat $arsipSurat)
    {
        $ketegori = KategoriSurat::with('ArsipSurat')->get();
        return view('tambah-arsip',[
            'data' => $ketegori,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ArsipSurat $arsipSurat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ArsipSurat $arsipSurat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ArsipSurat $arsipSurat)
    {
        //
    }
}
