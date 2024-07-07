@extends('layouts.main')
@section('judul')
    Tambah Arsip
@endsection

@section('content')

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h1 class="card-title">Arsip Surat > > Unggah</h1>
          <p>
            Unggah surat yang telah terbit pada form ini untuk di arsipkan. <br>
            Klik "Lihat" pada kolom aksi untuk menampilkan surat.
          </p>
          <ul id="components-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
            <li>
                <span>Gunakan file berformat PDF.</span>
            </li>
          </ul>

          <div class="col-lg-10">

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
  
                <!-- Vertical Form -->
                <form action="/tambah-arsip" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Surat</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="nomor_surat" id="inputText" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                      <div class="col-md-4">
                        <select id="inputState" name="kategori" required class="form-select">
                          <option selected>Choose...</option>
                          @foreach ($data as $item)
                            <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="judul" id="inputPassword" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">File surat (PDF)</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" name="file" accept=".pdf" id="formFile" required>
                      </div>
                    </div>
                    <div class="mt-4">
                      <a href="/" class="btn btn-warning"><i class="ri-arrow-drop-left-line"></i> Kembali</a>
                      <button type="submit" class="btn btn-primary ">Simpan</button>
                    </div>
                  </form><!-- End Horizontal Form -->
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

@endsection