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

              <form method="post" action="/kelaz/{{ $kelaz->id }}">
                @method('put')
                @csrf
                <div class="mb-3">
                  <label for="nama_kelaz" class="form-label">Nama Kelas</label>
                  <input type="text" class="form-control @error('nama_kelaz') is-invalid @enderror" id="nama_kelaz" name="nama_kelaz" autofocus value="{{ old('nama_kelaz', $kelaz->nama_kelaz) }}" />
                  @error('nama_kelaz')
                    <div class="invalid-feedback">
                      Kolom nama kelas harus diisi
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Nama Jurusan</label>
                  <select class="custom-select @error('jurusan_id') is-invalid @enderror" name="jurusan_id">
                    @foreach ($jurusans as $jurusan)
                      @if (old('jurusan_id', $kelaz->jurusan_id) == $jurusan->id)
                        <option value="{{ $jurusan->id }}" selected>{{ $jurusan->nama_jurusan }}</option>
                      @else
                        <option value="{{ $jurusan->id }}">{{ $jurusan->nama_jurusan }}</option>
                      @endif
                    @endforeach
                  </select>
                  @error('jurusan_id')
                    <div class="invalid-feedback">
                      Pilih salah satu dari jurusan diatas
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Tahun Angkatan</label>
                  <select class="custom-select @error('angkatan_id') is-invalid @enderror" name="angkatan_id">
                    @foreach ($angkatans as $angkatan)
                      @if (old('angkatan_id', $kelaz->angkatan_id) == $angkatan->id)
                        <option value="{{ $angkatan->id }}" selected>{{ $angkatan->tahun }}</option>
                      @else
                        <option value="{{ $angkatan->id }}">{{ $angkatan->tahun }}</option>
                      @endif
                    @endforeach
                  </select>
                  @error('angkatan_id')
                    <div class="invalid-feedback">
                      Pilih salah satu dari tahun angkatan diatas
                    </div>
                  @enderror
                </div>
                <button type="submit" class="mt-2 btn btn-primary">Ubah Kelas</button>

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
