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

              <form method="post" action="/kelaz">
                @csrf
                <div class="mb-3">
                  <label for="nama_kelaz" class="form-label">Nama Kelas</label>
                  <input type="text" class="form-control @error('nama_kelaz') is-invalid @enderror" id="nama_kelaz" name="nama_kelaz" autofocus value="{{ old('nama_kelaz') }}"/>
                  @error('nama_kelaz')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="jurusan" class="form-label">Nama Jurusan</label>
                  <select class="custom-select" name="jurusan_id">
                  @foreach ($jurusans as $jurusan)
                  <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                  @endforeach
                  </select>
                </div>

                <div class="mb-3">
                  <label for="jurusan" class="form-label">Tahun Angkatan</label>
                  <select class="custom-select" name="angkatan_id">
                  @foreach ($angkatan as $a)
                  <option value="{{ $a->id }}">{{ $a->tahun }}</option>
                  @endforeach
                  </select>
                </div>

                <button type="submit" class="mt-2 btn btn-primary">Tambah Kelas</button>

                <div class="text-right mt-2">
                  <a href="/kelaz"> &larr; Kembali ke data kelas</a>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
