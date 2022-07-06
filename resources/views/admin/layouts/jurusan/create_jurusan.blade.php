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

              <form method="post" action="/jurusan">
                @csrf
                <div class="mb-3">
                  <label for="nama_jurusan" class="form-label">Nama Jurusan</label>
                  <input type="text" class="form-control @error('nama_jurusan') is-invalid @enderror" id="nama_jurusan" name="nama_jurusan" autofocus value="{{ old('nama_jurusan') }}"/>
                  @error('nama_jurusan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="singkatan" class="form-label">Singkatan Jurusan</label>
                  <input type="text" class="form-control @error('singkatan') is-invalid @enderror" id="singkatan" name="singkatan" value="{{ old('singkatan') }}" />
                  @error('singkatan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <button type="submit" class="mt-2 btn btn-primary">Tambah Jurusan</button>

                <div class="text-right mt-2">
                  <a href="/jurusan"> &larr; Kembali ke data jurusan</a>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
