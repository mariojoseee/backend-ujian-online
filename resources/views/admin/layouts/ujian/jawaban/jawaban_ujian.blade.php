@extends('admin.template.main')

@section('main-content')
  <!-- Main content -->
  <section class="content">
    <!-- Container-fluid -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">

          {{-- BAGIAN SOAL UJIAN --}}
          <div class="card card-default">
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
            <div class="card-body">

              <div class="row">

                <div class="col-md-12">
                  <label for="soal" class="form-label">Soal Ujian</label>
                  <input id="soal" type="hidden" name="soal">
                  <trix-editor input="soal"></trix-editor>
                </div>

              </div>
              <div class="text-right mt-4 mb-2">
                <a href="/ujian/soal-ujian/"> &larr; Kembali ke data soal ujian</a>
              </div>
            </div>
          </div>


          {{-- BAGIAN FORM TAMBAH JAWABAN UJIAN --}}
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Form Tambah Jawaban</h3>
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

              <div class="row">

                <div class="col-md-12">
                  <label for="jawaban" class="form-label">Jawaban Ujian</label>
                  <input id="jawaban" type="hidden" name="jawaban">
                  <trix-editor input="jawaban"></trix-editor>
                </div>

                <div class="mt-3 mb-4 col-md-12">
                  <label class="form-label">Keterangan Jawaban</label>
                  <select class="custom-select @error('keterangan') is-invalid @enderror" name="keterangan">
                    <option value="" selected disabled>Pilih Keterangan Jawaban</option>
                    <option value="Ganjil">Benar</option>
                    <option value="Genap">Salah</option>
                  </select>
                  @error('keterangan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

              </div>
              <button type="submit" class="mb-2 btn btn-primary">Tambah Jawaban</button>
            </div>
          </div>

          <!-- Card -->
          <div class="card">

            <div class="card-header">
              <h3 class="card-title">Jawaban Ujian</h3>
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
                    <th style="width: 1%;">No.</th>
                    <th style="width: 20%;">Jawaban</th>
                    <th style="width: 4%;">Keterangan</th>
                    <th style="width: 5%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($jawabans as $jawaban)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $jawaban->jawaban }}</td>
                      <td>{{ $jawaban->keterangan }}</td>
                      <td class="text-right">
                        <a href="/ujian/{{ $jawaban->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                        <form action="/ujian/{{ $jawaban->id }}" method="post" class="d-inline">
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

  {{-- SCRIPT UNTUK MEN DISABLE TRIX-EDITOR --}}
  <script>
    document.querySelector('trix-editor').editor.element.setAttribute('contentEditable', false)
  </script>
@endsection
