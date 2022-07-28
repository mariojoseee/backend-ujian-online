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

              <form method="post" action="/siswa-smansabar">
                @csrf
                <div class="mb-3">
                  <label for="nis" class="form-label">Nomor Induk Siswa (NIS)</label>
                  <input type="number" class="form-control @error('nis') is-invalid @enderror" id="nis" name="nis" autofocus value="{{ old('nis') }}" />
                  @error('nis')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}" />
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                {{-- PEMBERITAHUAN INPUTAN DATA KELAS PADA TABEL SISWA --}}
                <div class="mb-3">
                  <label class="form-label">Jurusan</label>
                  <input disabled type="text" class="form-control" value="{{ $kelaz->jurusan->nama_jurusan }}" />
                </div>

                <div class="mb-3 form-row">
                  <div class="form-group col-md-6">
                    <label class="form-label">Kelas</label>
                    <input disabled type="text" class="form-control" value="{{ $kelaz->nama_kelaz }}" />
                  </div>

                  <div class="form-group col-md-6">
                    <label class="form-label">Angkatan</label>
                    <input disabled type="text" class="form-control" value="{{ $kelaz->angkatan->tahun }}" />
                  </div>
                </div>

                <input type="hidden" class="form-control" name="kelaz_id" value="{{ $kelaz->id }}" />

                <input type="hidden" class="form-control" name="admin_id" value="{{ Auth::guard('admin')->user()->id }}" />

                <button type="submit" class="mt-2 btn btn-primary">Tambah Siswa</button>

                <div class="text-right mt-2">
                  <a href="/siswa-smansabars/pilih_kelaz"> &larr; Kembali ke pilihan kelas</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
