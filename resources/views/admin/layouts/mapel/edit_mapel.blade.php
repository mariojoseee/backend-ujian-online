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

              <form method="post" action="/mapel/{{ $mapel->id }}">
                @method('put')
                @csrf
                <div class="mb-3">
                  <label for="nama_mapel" class="form-label">Mata Pelajaran</label>
                  <input type="text" class="form-control @error('nama_mapel') is-invalid @enderror" id="nama_mapel" name="nama_mapel" value="{{ old('nama_mapel', $mapel->nama_mapel) }}"/>
                  @error('nama_mapel')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="text-right mt-2">
                  <a href="/angkatan"> &larr; Kembali ke data mata pelajaran</a>
                </div>

                <button type="submit" class="mt-2 btn btn-primary">Update Mata Pelajaran</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
