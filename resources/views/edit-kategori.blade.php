@extends('layouts.main')
@section('judul')
    Edit Kategori
@endsection

@section('content')

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h1 class="card-title">Kategori Surat > > Edit  </h1>
          <p>
            Edit kategori. Jika sudah selesai, jangan lupa untuk <br>
            mengklik tombol "Simpan".
          </p>

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

            <div class="card">
              <div class="card-body">
  
                <!-- Vertical Form -->
                <form action="/edit-kategori/{{ $data->id }}" method="POST">
                  @csrf
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">ID (Auto Increment)</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" name="id" value="{{ $data->id }}" disabled id="inputText">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Kategori</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" name="nama_kategori" value="{{ $data->nama_kategori }}" id="inputText">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-3 col-form-label">Judul</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" name="keterangan" style="height: 100px">{{ $data->keterangan }}</textarea>
                      </div>
                    </div>
                    <div class="mt-4">
                      <a href="/kategori" class="btn btn-warning"><i class="ri-arrow-drop-left-line"></i> Kembali</a>
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