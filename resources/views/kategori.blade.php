@extends('layouts.main')
@section('judul')
    Kategori Surat
@endsection

@section('content')

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
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
          <h1 class="card-title">Kategori Surat</h1>
          <p>
            Berikut ini adalah kategori yang bisa digunakan untuk melabeli surat. <br>
            Klik "Tambah" pada kolom aksi untuk menambahkan kategori baru.
          </p>

          @if (session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif

          <!-- Table with stripped rows -->
          <table id="kategoriTable" class="table datatable">
            <thead>
              <tr>
                <th>ID Kategori</th>
                <th>Nama Kategori</th>
                <th>Judul</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($data as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->nama_kategori }}</td>
                  <td>{{ $item->keterangan }}</td>
                  <td>
                    <a href="/hapus-kategori/{{ $item->id }}" data-confirm-delete="true" class="btn btn-danger">Hapus</a>
                    <a href="/edit-kategori/{{ $item->id }}" class="btn btn-primary">Edit</a>
                  </td>
                </tr>
              @endforeach

            </tbody>
          </table>
          <!-- End Table with stripped rows -->

          <a class="btn btn-success" href="/tambah-kategori"><i class="bx bxs-file-plus"></i> Tambah kategori baru</a>

        </div>
      </div>

    </div>
  </div>
</section>

@endsection