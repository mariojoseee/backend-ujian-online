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

              <form method="post" action="/angkatan">
                @csrf
                <div class="mb-3">
                  <label for="tahun" class="form-label">Tahun Angkatan</label>
                  <input type="number" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" autofocus value="{{ old('tahun') }}"/>
                  @error('tahun')
                    <div class="invalid-feedback">
                      Kolom tahun angkatan harus diisi
                    </div>
                  @enderror
                </div>

                <button type="submit" class="mt-2 btn btn-primary">Tambah Angkatan</button>

                <div class="text-right mt-2">
                  <a href="/angkatan"> &larr; Kembali ke data angkatan</a>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
