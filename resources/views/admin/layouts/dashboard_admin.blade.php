@extends('admin.template.main')

@section('main-content')
  <section class="content">
    <div class="container-fluid">
      <div class="row">

        {{-- DASHBOARD ADMIN --}}
        @if (Str::length(Auth::guard('admin')->user()) > 0)
          @if (Auth::guard('admin')->user()->level = 'admin')
            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">TOTAL ADMIN</span>
                  <span class="info-box-number">
                    {{ $admin->count() }} Orang
                  </span>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-chalkboard-teacher"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">TOTAL GURU</span>
                  <span class="info-box-number">
                    {{ $guru->count() }} Orang
                  </span>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
              <div class="info-box">
                <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-graduate"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">TOTAL SISWA</span>
                  <span class="info-box-number">
                    {{ $siswa->count() }} Orang
                  </span>
                </div>
              </div>
            </div>

            <div class="container-fluid">
              <div class="card card-default">
                <div class="card-header">
                  <h3 class="card-title">Profil Akun</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>

                <div class="card-body">
                  <div class="mb-2 form-row">
                    <div class="form-group col-md-6">
                      <label class="form-label">Nama Lengkap</label>
                      <input disabled type="text" class="form-control" value="{{ Auth::guard('admin')->user()->nama }}" />
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label">NUPTK</label>
                      <input disabled type="text" class="form-control" value="{{ Auth::guard('admin')->user()->nuptk }}" />
                    </div>

                    <div class="form-group col-md-6">
                      <label class="form-label">Email</label>
                      <input disabled type="text" class="form-control" value="{{ Auth::guard('admin')->user()->email }}" />
                    </div>
                    <div class="form-group col-md-6">
                      <label class="form-label">Nomor HP</label>
                      <input disabled type="text" class="form-control" value="{{ Auth::guard('admin')->user()->no_telp }}" />
                    </div>
                  </div>
                  <a href="/profil-admin" class="btn btn-primary">Ubah Profil</a>
                </div>
              </div>
            </div>
          @endif
        @endif

      </div>
    </div>
  </section>
@endsection