<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArsipSurat extends Model
{
    use HasFactory;
    protected $table = 'arsip_surat';

    public function KategoriSurat(){
        return $this->belongsTo(KategoriSurat::class,'id_kategori');
    }
}
