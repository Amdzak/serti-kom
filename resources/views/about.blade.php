@extends('layouts.main')
@section('judul')
    About Me
@endsection

@section('content')

<section class="section profile">

  <div class="row">
    <div class="col-xl-4">
      
      {{-- image --}}
      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

          <img src={{ asset("assets/img/my-image.jpg") }} alt="Profile" class="rounded-circle">
          <h2 class="text-center">Ahmad Zulfikar Kurniawan</h2>
        </div>
      </div>

    </div>

    <div class="col-xl-8">

      <div class="card">
        <div class="card-body pt-3">

          <div class="tab-content ">

            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <h5 class="card-title">About</h5>
              <p class="small ">
                Aplikasi ini di buat oleh 
              </p>

              <h5 class="card-title">Profile Details</h5>

              <div class="row">
                <div class="col-lg-3 col-md-4 label ">Nama</div>
                <div class="col-lg-9 col-md-8">Ahmad Zulfikar Kurniawan</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Prodi</div>
                <div class="col-lg-9 col-md-8">D3-MI PSDKU KEDIRI</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">NIM</div>
                <div class="col-lg-9 col-md-8">2231730098</div>
              </div>

              <div class="row">
                <div class="col-lg-3 col-md-4 label">Tanggal</div>
                <div class="col-lg-9 col-md-8">05 Juli 2024</div>
              </div>

            </div>


          </div><!-- End Bordered Tabs -->

        </div>
      </div>

    </div>
  </div>

</section>

@endsection