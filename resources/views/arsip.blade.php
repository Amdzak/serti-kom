@extends('layouts.main')
@section('judul')
    Arsip
@endsection

@section('content')

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h1 class="card-title">Arsip Surat</h1>
          <p>
            Berikut ini adalah surat-surat yang telah terbit dan di arsipkan. <br>
            Klik "Lihat" pada kolom aksi untuk menampilkan surat.
          </p>

          @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              {{-- @dd($data) --}}
              <tr>
                <th>Nomor Surat</th>
                <th>Kategori</th>
                <th>Judul</th>
                <th>Waktu Pengarsipan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($data as $item)
<<<<<<< HEAD
                  {{-- @dd($item) --}}
              <tr>
                <td>{{ $item->nomor_surat }}</td>
                <td>
                  @if ($item->KategoriSurat == null)
                      --
                  @else
                  {{ $item->KategoriSurat->nama_kategori }}
                  @endif
                </td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->waktu_arsip }}</td>
                <td>
                  <a href="/hapus/{{ $item->id }}" data-confirm-delete="true" class="btn btn-danger">Hapus</a>
=======
                  
              <tr>
                <td>{{ $item->nomor_surat }}</td>
                <td>{{ $item->KategoriSurat->nama_kategori }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->waktu_arsip }}</td>
                <td>
                  <a href="/hapus/{{ $item->id }}" class="btn btn-danger">Hapus</a>
>>>>>>> 9fef3320644bf063f560db45076b9a0a644bf3e2
                  <a href="/edit/{{ $item->id }}" class="btn btn-warning">Unduh</a>
                  <a href="/lihat/{{ $item->id }}" class="btn btn-primary">Lihat</a>
                </td>
              </tr>
              @endforeach

            </tbody>
          </table>
          <!-- End Table with stripped rows -->

          <a class="btn btn-success" href="/tambah-arsip"><i class="bx bxs-file-plus"></i> Arsipkan surat</a>

        </div>
      </div>

    </div>
  </div>
</section>

@endsection