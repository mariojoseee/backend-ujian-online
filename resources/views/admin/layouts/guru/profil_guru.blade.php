@extends('admin.template.main')

@section('main-content')
  <!-- Main content -->
  <section class="content">
    <!-- Container-fluid -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Card -->
          <div class="card">
            <!-- Card-body -->
            <div class="card-body mr-1">

              <form method="post" action="/profil-guru/update">
                @method('put')
                @csrf
                <div class="mb-3">
                  <label for="nuptk" class="form-label">Nomor Unik Pendidik dan Tenaga Kependidikan (NUPTK)</label>
                  <input type="text" class="form-control @error('nuptk') is-invalid @enderror" id="nuptk" name="nuptk" value="{{ old('nuptk', auth('guru')->user()->nuptk) }}" />
                  @error('nuptk')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Alamat Email</label>
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email', auth('guru')->user()->email) }}" />
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="nama" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', auth('guru')->user()->nama) }}" />
                  @error('nama')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="no_telp" class="form-label">Nomor Handphone</label>
                  <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" value="{{ old('no_telp', auth('guru')->user()->no_telp) }}" />
                  @error('no_telp')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <button type="submit" class="mt-2 btn btn-primary mr-2">Ubah Profil</button>
                <a href="/edit-password-guru" class="btn btn-danger mt-2">Ubah Password</a>

                <div class="text-right mt-2 mb-2">
                  <a href="/dashboard-guru"> &larr; Kembali ke dashboard</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
