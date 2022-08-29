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

              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th style="width: 1%;">No.</th>
                    <th style="width: 8%;">Nama Kelas</th>
                    <th style="width: 13%;">Mata Pelajaran</th>
                    <th style="width: 8%;">Angkatan</th>
                    <th style="width: 8%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data_ajars as $data_ajar)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $data_ajar->kelaz->nama_kelaz }}</td>
                      <td>{{ $data_ajar->mapel->nama_mapel }}</td>
                      <td>{{ $data_ajar->kelaz->angkatan->tahun }}</td>
                      <td class="text-right">
                        <a href="/laporan-nilai-guru/kelaz/{{ $data_ajar->id }}" class="btn btn-primary btn-sm">Lihat Laporan Data Nilai</a>
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
