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
              <a href="/siswa-smansabar" class="btn btn-primary">Kembali ke Data Siswa</a>

              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th style="width: 1%;">No.</th>
                    <th style="width: 9%;">Nama Kelas</th>
                    <th style="width: 13%;">Jurusan</th>
                    <th style="width: 9%;">Angkatan</th>
                    <th style="width: 8%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($kelazs as $kelaz)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $kelaz->nama_kelaz }}</td>
                      <td>{{ $kelaz->jurusan->nama_jurusan }}</td>
                      <td>{{ $kelaz->angkatan->tahun }}</td>
                      <td class="text-right">
                        <a href="/siswa-smansabar/{{ $kelaz->id }}" class="btn btn-success btn-sm">Tambah Siswa</a>
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
