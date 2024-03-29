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
              <h3 class="card-title">Form Ubah Jawaban Ujian</h3>
            </div>
            <div class="card-body">

              {{-- FORM --}}
              <form method="post" action="/ujian/jawaban-ujian/{{ $jawaban->id }}">
                @method('put')
                @csrf
                <div class="row">

                  <div class="col-md-12 mb-3" id="blank-toolbar">
                    <label for="soal" class="form-label">Soal Ujian</label>
                    <input id="soal" type="hidden" name="soal" value="{{ $jawaban->soal->soal }}">
                    <trix-editor input="soal" toolbar="blank-toolbar"></trix-editor>
                  </div>

                  <div class="col-md-12">
                    <label for="jawaban" class="form-label">Jawaban Ujian</label>
                    @error('jawaban')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="jawaban" type="hidden" name="jawaban" value="{{ old('jawaban', $jawaban->jawaban) }}">
                    <trix-editor input="jawaban"></trix-editor>
                  </div>

                  <div class="mt-3 mb-2 col-md-6">
                    <div class="form-group">
                      <label class="form-label">Keterangan Jawaban</label>
                      <select class="custom-select @error('keterangan') is-invalid @enderror" name="keterangan">
                        <option value="Benar" {{ old('keterangan', $jawaban->keterangan) == 'Benar' ? 'selected' : '' }}>Benar</option>
                        <option value="Salah" {{ old('keterangan', $jawaban->keterangan) == 'Salah' ? 'selected' : '' }}>Salah</option>
                      </select>
                      @error('keterangan')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-md-6 mt-3 mb-2">
                    <div class="form-group">
                      <label for="skor" class="form-label">Skor Jawaban</label>
                      <input type="number" class="form-control @error('skor') is-invalid @enderror" id="skor" name="skor" value="{{ old('skor', $jawaban->skor) }}" />
                      @error('skor')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                      @enderror
                    </div>
                  </div>

                  <input type="hidden" class="form-control" name="soal_id" value="{{ $jawaban->soal_id }}" />

                </div>
                <button type="submit" class="mt-2 btn btn-primary">Ubah Jawaban</button>
              </form>
              <div class="text-right mt-4 mb-2">
                <a href="/ujian/jawaban-ujian/{{ $jawaban->soal_id }}"> &larr; Kembali ke data jawaban ujian</a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

  {{-- SCRIPT UNTUK MEN DISABLE TRIX-EDITOR --}}
  <script>
    document.querySelector('trix-editor').editor.element.setAttribute('contentEditable', false)
  </script>
@endsection
