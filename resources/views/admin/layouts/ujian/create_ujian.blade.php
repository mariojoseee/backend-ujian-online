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

              <form method="post" action="/ujian">
                @csrf
                <div class="mb-3">
                  <label class="form-label">Jenis Ujian</label>
                  <select class="custom-select @error('jenis') is-invalid @enderror" name="jenis">
                    <option value="" selected disabled>Pilih Jenis Ujian</option>
                    <option value="Ujian Tengah Semester (UTS)" {{ old('jenis') == 'Ujian Tengah Semester (UTS)' ? 'selected' : '' }}>Ujian Tengah Semester (UTS)</option>
                    <option value="Ujian Akhir Semester (UAS)" {{ old('jenis') == 'Ujian Akhir Semester (UAS)' ? 'selected' : '' }}>Ujian Akhir Semester (UAS)</option>
                  </select>
                  @error('jenis')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Mata Pelajaran</label>
                  <select class="form-control select2 @error('mapel_id') is-invalid @enderror" style="width: 100%;" name="mapel_id">
                    <option value="" selected disabled>Pilih Mata Pelajaran</option>
                    @foreach ($mapels as $mapel)
                      @if (old('mapel_id') == $mapel->id)
                        <option value="{{ $mapel->id }}" selected>{{ $mapel->nama_mapel }}</option>
                      @else
                        <option value="{{ $mapel->id }}">{{ $mapel->nama_mapel }}</option>
                      @endif
                    @endforeach
                  </select>
                  @error('mapel_id')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Kategori Kelas</label>
                  <select class="custom-select @error('kelas') is-invalid @enderror" name="kelas">
                    <option value="" selected disabled>Pilih Kategori Kelas</option>
                    <option value="X" {{ old('kelas') == 'X' ? 'selected' : '' }}>Kelas X</option>
                    <option value="XI" {{ old('kelas') == 'XI' ? 'selected' : '' }}>Kelas XI</option>
                    <option value="XII" {{ old('kelas') == 'XII' ? 'selected' : '' }}>Kelas XII</option>
                  </select>
                  @error('kelas')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Semester</label>
                  <select class="custom-select @error('semester') is-invalid @enderror" name="semester">
                    <option value="" selected disabled>Pilih Semester</option>
                    <option value="Ganjil" {{ old('semester') == 'Ganjil' ? 'selected' : '' }}>Semester Ganjil</option>
                    <option value="Genap" {{ old('semester') == 'Genap' ? 'selected' : '' }}>Semester Genap</option>
                  </select>
                  @error('semester')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Deskripsi</label>
                  <textarea class="form-control @error('deskripsi') is-invalid @enderror" rows="3" name="deskripsi" placeholder="Inputkan deskripsi singkat terkait ujian yang dibuat . . .">{{ old('deskripsi') }}</textarea>
                  @error('deskripsi')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <input type="hidden" class="form-control" name="guru_id" value="{{ Auth::guard('guru')->user()->id }}" />
                <input type="hidden" class="form-control" name="status" value="Nonaktif" />

                <button type="submit" class="mt-2 btn btn-primary">Tambah Ujian</button>

                <div class="text-right mt-2">
                  <a href="/ujian"> &larr; Kembali ke data jenis ujian</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
