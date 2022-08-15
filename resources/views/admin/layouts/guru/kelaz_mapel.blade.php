@extends('admin.template.main')

@section('main-content')
  <!-- Main content -->
  <section class="content">
    <!-- Container-fluid -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          {{-- BAGIAN FORM TAMBAH SOAL UJIAN --}}
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Kelas dan Mapel Guru</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <div class="card-body">

              {{-- FORM --}}
              <form method="post" action="/ujian/soal-ujian">
                @csrf
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">NUPTK</label>
                      <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $guru->nuptk }}" disabled />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Nama Guru</label>
                      <input type="text" class="form-control" id="mapel_id" name="mapel_id" value="{{ $guru->nama }}" disabled />
                    </div>
                  </div>

                  {{-- INPUTAN KELAS DAN MAPEL --}}
                  <div class="col-md-6 mb-2">
                    <label class="form-label">Kelas</label>
                    <select class="form-control select2 @error('kelaz_id') is-invalid @enderror" style="width: 100%;" name="kelaz_id">
                      <option value="" selected disabled>Pilih Kelas</option>
                      @foreach ($kelazs as $kelaz)
                        @if (old('kelaz_id') == $kelaz->id)
                          <option value="{{ $kelaz->id }}" selected>{{ $kelaz->nama_kelaz }}</option>
                        @else
                          <option value="{{ $kelaz->id }}">{{ $kelaz->nama_kelaz }}</option>
                        @endif
                      @endforeach
                    </select>
                    @error('kelaz_id')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                  </div>

                  <div class="col-md-6">
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

                </div>
                <button type="submit" class="mt-4 btn btn-primary">Tambah Kelas dan Mapel</button>
              </form>
              <div class="text-right mt-4 mb-2">
                <a href="/guru-smansabar"> &larr; Kembali ke data guru</a>
              </div>
            </div>
          </div>

          <!-- Card -->
          <div class="card">

            <div class="card-header">
              <h3 class="card-title">Data Kelas dan Mapel Guru</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>

            <!-- Card-body -->
            <div class="card-body">

              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th style="width: 3%;">No.</th>
                    <th style="width: 30%;">Mata Pelajaran</th>
                    <th style="width: 20%;">Kelas</th>
                    <th style="width: 10%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data_ajar as $data)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $data->mapel->nama_mapel }}</td>
                        <td>{{ $data->kelaz->nama_kelaz }}</td>
                        <td class="text-right">
                          <form action="/ujian/soal-ujian/{{ 1 }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">Hapus</button>
                          </form>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
