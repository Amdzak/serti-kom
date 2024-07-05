@extends('layouts.main')
@section('judul')
    Tambah Kategori
@endsection

@section('content')

<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h1 class="card-title">Kategori Surat > > Tambah  </h1>
          <p>
            Tambahkan kategori. Jika sudah selesai, jangan lupa untuk <br>
            mengklik tombol "Simpan".
          </p>

          <div class="col-lg-10">

            <div class="card">
              <div class="card-body">
  
                <!-- Vertical Form -->
                <form>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">ID (Auto Increment)</label>
                      <div class="col-sm-2">
                        <input type="text" class="form-control" id="inputText">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Kategori</label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputText">
                      </div>
                    </div>
                    <div class="row mb-3">
                      <label for="inputPassword" class="col-sm-3 col-form-label">Judul</label>
                      <div class="col-sm-6">
                        <textarea class="form-control" style="height: 100px"></textarea>
                      </div>
                    </div>
                    <div class="mt-4">
                      <a href="/kategori" class="btn btn-warning"><i class="ri-arrow-drop-left-line"></i> Kembali</a>
                      <button type="reset" class="btn btn-primary ">Simpan</button>
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