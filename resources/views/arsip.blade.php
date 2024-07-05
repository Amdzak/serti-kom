@extends('layouts.main')
@section('judul')
    Arsip
@endsection

@section('content')

{{-- <div class="pagetitle">
    <h1>Arsip Surat</h1>
    <nav>
      <ol class="breadcrumb">
        <p class="breadcrumb-item">
          Berikut ini adalah surat-surat yang telah terbit dan di arsipkan. <br>
          Klik "Lihat" pada kolom aksi untuk menampilkan surat.
        </p>
      </ol>
    </nav>
</div> --}}

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

          <!-- Table with stripped rows -->
          <table class="table datatable">
            <thead>
              <tr>
                <th>ID Kategori</th>
                <th>Nama Kategori</th>
                <th>Judul</th>
                <th>Keterangan</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Unity Pugh</td>
                <td>9958</td>
                <td>Curicó</td>
                <td>2005/02/11</td>
                <td>
                  <a href="/hapus" class="btn btn-danger">Hapus</a>
                  <a href="/edit" class="btn btn-warning">Unduh</a>
                  <a href="/lihat" class="btn btn-primary">Lihat</a>
                </td>
              </tr>
              <tr>
                <td>Theodore Duran</td>
                <td>8971</td>
                <td>Dhanbad</td>
                <td>1999/04/07</td>
                <td>97%</td>
              </tr>
              <tr>
                <td>Kylie Bishop</td>
                <td>3147</td>
                <td>Norman</td>
                <td>2005/09/08</td>
                <td>63%</td>
              </tr>
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