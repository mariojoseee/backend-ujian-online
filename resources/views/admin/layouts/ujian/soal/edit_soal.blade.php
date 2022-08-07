@extends('admin.template.main')

@section('main-content')
  <!-- Main content -->
  <section class="content">
    <!-- Container-fluid -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          {{-- BAGIAN FORM EDIT SOAL UJIAN --}}
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Form Edit Soal Ujian</h3>
            </div>
            <div class="card-body">

              {{-- FORM --}}
              <form method="post" action="/ujian/soal-ujian/{{ $soal->id }}">
                @method('put')
                @csrf
                <div class="row">

                  {{-- INPUTAN SOAL --}}
                  <div class="col-md-12">
                    <label for="soal" class="form-label">Soal Ujian</label>
                    @error('soal')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="soal" type="hidden" name="soal" value="{{ old('soal', $soal->soal) }}">
                    <trix-editor input="soal"></trix-editor>
                  </div>

                  <input type="hidden" class="form-control" name="ujian_id" value="{{ $soal->ujian_id }}" />

                </div>
                <button type="submit" class="mt-4 btn btn-primary">Update Soal</button>
              </form>
              <div class="text-right mt-4 mb-2">
                <a href="/ujian/soal-ujian/{{ $soal->ujian_id }}"> &larr; Kembali ke soal ujian</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
@endsection
