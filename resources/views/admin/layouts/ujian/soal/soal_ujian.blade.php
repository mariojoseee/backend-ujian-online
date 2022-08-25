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
              <h3 class="card-title">Form Tambah Soal Ujian</h3>
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
                      <label class="form-label">Jenis Ujian</label>
                      <input type="text" class="form-control" id="jenis" name="jenis" value="{{ $ujian->jenis }}" disabled />
                    </div>
                    <div class="form-group">
                      <label class="form-label">Kategori Kelas</label>
                      <input type="text" class="form-control" id="kelas" name="kelas" value="Kelas {{ $ujian->kelas }}" disabled />
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Mata Pelajaran</label>
                      <input type="text" class="form-control" id="mapel_id" name="mapel_id" value="{{ $ujian->mapel->nama_mapel }}" disabled />
                    </div>
                    <div class="form-group">
                      <label class="form-label">Semester</label>
                      <input type="text" class="form-control" id="semester" name="semester" value="{{ $ujian->semester }}" disabled />
                    </div>
                  </div>

                  {{-- INPUTAN SOAL --}}
                  <div class="col-md-12">
                    <label for="soal" class="form-label">Soal Ujian</label>
                    @error('soal')
                      <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <input id="soal" type="hidden" name="soal" value="{{ old('soal') }}">
                    <trix-editor input="soal"></trix-editor>
                  </div>

                  <input type="hidden" class="form-control" name="ujian_id" value="{{ $ujian->id }}"/>

                </div>
                <button type="submit" class="mt-4 btn btn-primary">Tambah Soal</button>
              </form>
              <div class="text-right mt-4 mb-2">
                <a href="/ujian"> &larr; Kembali ke data jenis ujian</a>
              </div>
            </div>
          </div>

          <!-- Card -->
          <div class="card">

            <div class="card-header">
              <h3 class="card-title">Soal Ujian</h3>
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
                    <th style="width: 50%;">Soal</th>
                    {{-- <th style="width: 7%;">Jawaban</th> --}}
                    <th style="width: 20%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($soals as $soal)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{!! $soal->soal !!}</td>
                      {{-- <td>{{ $jawaban }}</td> --}}
                      <td class="text-right">
                        <a href="/ujian/jawaban-ujian/{{ $soal->id }}" class="btn btn-success btn-sm">Tambah Jawaban</a>
                        <a href="/ujian/soal-ujian/edit/{{ $soal->id }}" class="btn btn-primary btn-sm">Ubah</a>
                        <form action="/ujian/soal-ujian/{{ $soal->id }}" method="post" class="d-inline">
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
