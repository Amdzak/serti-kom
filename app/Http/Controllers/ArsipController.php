<?php

namespace App\Http\Controllers;

use App\Models\ArsipSurat;
use App\Models\KategoriSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ArsipSurat::with('KategoriSurat')->get();
        // dd($data);
        $title = 'Alert!';
        $text = "Apakah anda yakin ingin menghapus arsip surat ini?";
        confirmDelete($title, $text);
        
        return view('arsip',[
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id,Request $request)
    {
        $surat = ArsipSurat::findOrFail($id);

        $validated = $request->validate([
            'nomor_surat' => 'required',
            'file' => 'mimes:pdf',
        ]);

        if($validated){
            date_default_timezone_set('Asia/Jakarta');

            if($request->hasFile('file')){
                $file = $request->file('file');
                $name = time().'.'.$file->getClientOriginalName();
                $destinationPath = public_path('/arsip-surat/');
                $file->move($destinationPath, $name);
                $surat->file = $name;
            }
            
            $surat->nomor_surat = $request->nomor_surat;
            $surat->id_kategori = $request->kategori;
            $surat->judul = $request->judul;
            $surat->waktu_arsip = date('Y-m-d H:i:s');
            // dd($surat);
            $surat->update();

            return redirect('/')->with('success','Berhasil mengedit arsip');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor_surat' => 'required|unique:arsip_surat',
            'file' => 'required|mimes:pdf',
        ]);

        if($validated){
            date_default_timezone_set('Asia/Jakarta');
            $file = $request->file('file');
            $name = date('Ymd- ').'.'.$file->getClientOriginalName();
            $destinationPath = public_path('/arsip-surat/');
            $file->move($destinationPath, $name);

            $surat = new ArsipSurat();
            $surat->nomor_surat = $request->nomor_surat;
            $surat->id_kategori = $request->kategori;
            $surat->judul = $request->judul;
            $surat->file = $name;
            $surat->waktu_arsip = date('Y-m-d H:i:s');
            // dd($surat);
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

    public function lihat($id)
    {
        $arsip = ArsipSurat::with('KategoriSurat')->where('id',$id)->get();
        // $ketegori = KategoriSurat::with('ArsipSurat')->get();


        return view('surat',[
            'data' => $arsip,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $arsip = ArsipSurat::with('KategoriSurat')->where('id',$id)->get();

        
        return view('edit-arsip',[
            'data' => $arsip,
            'items' => KategoriSurat::with('ArsipSurat')->get(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function download($id)
    {

        $arsip = ArsipSurat::findOrFail($id);
        $filePath = public_path("arsip-surat/" . $arsip->file);
        // dd(file_exists($filePath));
        
        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            // return redirect('/')->with('error', 'File tidak ditemukan.');
            return response()->json(['error' => 'File tidak ditemukan.'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $file = ArsipSurat::findOrFail($id);

        //delete image
        Storage::delete('public/arsip-surat/'. $file->file);

        //delete post
        $file->delete();
        return redirect('/')->with('success','Berhasil menghapus arsip');

    }
}
