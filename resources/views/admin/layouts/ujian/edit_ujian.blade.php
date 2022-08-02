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

              <form method="post" action="/ujian/{{ $ujian->id }}">
                @method('put')
                @csrf

                <div class="mb-3">
                  <label class="form-label">Jenis Ujian</label>
                  <select class="custom-select @error('jenis') is-invalid @enderror" name="jenis">
                    @if ($ujian->jenis == 'Ujian Tengah Semester (UTS)')
                      <option value="Ujian Tengah Semester (UTS)">Ujian Tengah Semester (UTS)</option>
                      <option value="Ujian Akhir Semester (UAS)">Ujian Akhir Semester (UAS)</option>
                    @else
                      <option value="Ujian Akhir Semester (UAS)">Ujian Akhir Semester (UAS)</option>
                      <option value="Ujian Tengah Semester (UTS)">Ujian Tengah Semester (UTS)</option>
                    @endif
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
                    @foreach ($mapels as $mapel)
                      @if (old('mapel_id', $ujian->mapel_id) == $mapel->id)
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
                    @if ($ujian->kelas == 'X')
                      <option value="X">Kelas X</option>
                      <option value="XI">Kelas XI</option>
                      <option value="XII">Kelas XII</option>
                    @elseif ($ujian->kelas == 'XI')
                      <option value="XI">Kelas XI</option>
                      <option value="X">Kelas X</option>
                      <option value="XII">Kelas XII</option>
                    @else
                      <option value="XII">Kelas XII</option>
                      <option value="XI">Kelas XI</option>
                      <option value="X">Kelas X</option>
                    @endif
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
                    @if ($ujian->semester == 'Ganjil')
                      <option value="Ganjil">Semester Ganjil</option>
                      <option value="Genap">Semester Genap</option>
                    @else
                      <option value="Genap">Semester Genap</option>
                      <option value="Ganjil">Semester Ganjil</option>
                    @endif
                  </select>
                  @error('semester')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label class="form-label">Deskripsi</label>
                  <textarea class="form-control @error('deskripsi') is-invalid @enderror" rows="3" name="deskripsi" placeholder="Inputkan deskripsi singkat terkait ujian yang dibuat . . .">{{ old('deskripsi', $ujian->deskripsi) }}</textarea>
                  @error('deskripsi')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
                </div>

                <input type="hidden" class="form-control" name="guru_id" value="{{ Auth::guard('guru')->user()->id }}"/>

                <button type="submit" class="mt-2 btn btn-primary">Update Ujian</button>

                <div class="text-right mt-2">
                  <a href="/ujian"> &larr; Kembali ke data ujian</a>
                </div>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
