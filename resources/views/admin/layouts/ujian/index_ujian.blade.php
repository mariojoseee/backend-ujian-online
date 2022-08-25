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
            <div class="card-body">
              <a href="/ujian/create" class="btn btn-success">Tambah</a>

              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th style="width: 0.5%;">No.</th>
                    <th style="width: 4%;">Jenis Ujian</th>
                    <th style="width: 1%;">Kode Ujian</th>
                    <th style="width: 1%;">Semester</th>
                    <th style="width: 5%;">Mapel</th>
                    <th style="width: 2%;">Waktu</th>
                    <th style="width: 9%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($ujians as $ujian)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $ujian->jenis }}</td>
                      <td>{{ $ujian->kode_ujian }}</td>
                      <td>{{ $ujian->semester }}</td>
                      <td>{{ $ujian->mapel->nama_mapel }}</td>
                      <td>{{ $ujian->waktu }}</td>
                      <td class="text-right">
                        @if ($ujian->status == "Aktif")
                          {{-- SET UJIAN NONAKTIF --}}
                          <form action="/ujian/status-ujian/{{ $ujian->id }}" class="d-inline" method="post">
                            @csrf
                            @method('put')
                            <button class="btn btn-success btn-sm" onclick="return confirm('Apakah status ujian ini ingin dinonaktifkan?')">Aktif</button>
                          </form>
                        @elseif ($ujian->status == "Nonaktif")
                          {{-- SET UJIAN AKTIF --}}
                          <form action="/ujian/status-ujian/{{ $ujian->id }}" class="d-inline" method="post">
                            @csrf
                            @method('put')
                            <button class="btn btn-warning btn-sm" onclick="return confirm('Apakah status ujian ini ingin diaktifkan?')">Nonaktif</button>
                          </form>
                        @endif
                        <a href="/ujian/soal-ujian/{{ $ujian->id }}" class="btn btn-info btn-sm">Soal</a>
                        <a href="/ujian/{{ $ujian->id }}/edit" class="btn btn-primary btn-sm">Ubah</a>
                        <form action="/ujian/{{ $ujian->id }}" method="post" class="d-inline">
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
