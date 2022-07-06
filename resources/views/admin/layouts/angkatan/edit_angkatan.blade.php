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

              <form method="post" action="/angkatan/{{ $angkatan->id }}">
                @method('put')
                @csrf
                <div class="mb-3">
                  <label for="tahun" class="form-label">Tahun Angkatan</label>
                  <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" value="{{ old('tahun', $angkatan->tahun) }}"/>
                  @error('tahun')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="text-right mt-2">
                  <a href="/angkatan"> &larr; Kembali ke data angkatan</a>
                </div>

                <button type="submit" class="mt-2 btn btn-primary">Update Angkatan</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
