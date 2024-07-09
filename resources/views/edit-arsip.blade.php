@extends('layouts.main')
@section('judul')
    Edit Arsip
@endsection

@section('content')

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h1 class="card-title">Arsip Surat > > Edit</h1>
          <p>
            Edit surat yang telah terbit . <br>
            Klik "Simpan" pada untuk menyimpan surat.
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
                <form action="/edit-arsip/{{ $data[0]->id }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Nomor Surat</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ $data[0]->nomor_surat }}" class="form-control" name="nomor_surat" id="inputText" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-2 col-form-label">Kategori</label>
                      <div class="col-md-4">
                        <select id="inputState" name="kategori" required class="form-select">
                          <option selected value="{{ $data[0]->id_kategori }}">{{ $data[0]->KategoriSurat->nama_kategori }}</option>
                          @foreach ($items as $item)
                            @if ($item->id != $data[0]->id_kategori)
                              <option value="{{ $item->id }}">{{ $item->nama_kategori }}</option>
                            @endif
                          @endforeach
                        </select>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">Judul</label>
                      <div class="col-sm-10">
                        <input type="text" value="{{ $data[0]->judul }}"  class="form-control" name="judul" id="inputPassword" required>
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword3" class="col-sm-2 col-form-label">File surat (PDF)</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="file" name="file" accept=".pdf" id="formFile">
                      </div>
                    </div>
                    <div class="mt-4">
                      <a href="/" class="btn btn-warning"><i class="ri-arrow-drop-left-line"></i> Kembali</a>
                      <button type="submit" class="btn btn-primary">Simpan</button>
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
