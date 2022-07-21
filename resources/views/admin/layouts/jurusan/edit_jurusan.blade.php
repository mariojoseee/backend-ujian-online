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

              <form method="post" action="/jurusan/{{ $jurusan->id }}">
                @method('put')
                @csrf
                <div class="mb-3">
                  <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
                  <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror" id="nama_jurusan" name="nama_jurusan" value="{{ old('nama_jurusan', $jurusan->nama_jurusan) }}"/>
                  @error('nama_jurusan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="singkatan" class="form-label">Singkatan Jurusan</label>
                  <input type="text" class="form-control @error('singkatan') is-invalid @enderror" id="singkatan" name="singkatan" value="{{ old('singkatan', $jurusan->singkatan) }}" style="text-transform: uppercase;" />
                  @error('singkatan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="text-right mt-2">
                  <a href="/jurusan"> &larr; Kembali ke data jurusan</a>
                </div>

                <button type="submit" class="mt-2 btn btn-primary">Update Jurusan</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
