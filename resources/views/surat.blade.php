@extends('layouts.main')
@section('judul')
    Lihat Arsip
@endsection

@section('content')

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h1 class="card-title">Arsip Surat > > Lihat</h1>
          <p>Nomor : {{ $data[0]->nomor_surat }}</p>
          <p>Kategori : {{ $data[0]->KategoriSurat->nama_kategori }}</p>
          <p>Judul : {{ $data[0]->judul }}</p>
          <p>Waktu Unggah: {{ $data[0]->waktu_arsip }}</p>

          <div class="col-lg-10 mb-3">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">

            <div class="card">
              <div class="card-body">
  
                <iframe src="{{ url('arsip-surat/' . $data[0]->file) }}" style="width: 100%; height: 70vh;" frameborder="0" ></iframe>
                
              </div>
            </div>
          </div>

          <a class="btn btn-warning" href="/"><i class="ri-arrow-drop-left-line"></i> Kembali</a>
          <a class="btn btn-primary" href="/unduh/{{ $data[0]->id }}"><i class="bx bxs-file-plus"></i> Unduh</a>
          <a class="btn btn-success" href="/edit-arsip/{{ $data[0]->id }}"> Ganti/Edit File</a>

        </div>
      </div>

    </div>
  </div>
</section>

@endsection