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
              <a href="/siswa-smansabars/pilih_kelaz" class="btn btn-success">Tambah</a>

              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th style="width: 1%;">No.</th>
                    <th style="width: 15%;">Nama Siswa</th>
                    <th style="width: 4%;">NIS</th>
                    <th style="width: 4%;">Email</th>
                    <th style="width: 7%;">Nomor HP</th>
                    <th style="width: 7%;">Kelas</th>
                    <th style="width: 7%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($siswas as $siswa)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $siswa->nama }}</td>
                      <td>{{ $siswa->nis }}</td>
                      <td>{{ $siswa->email }}</td>
                      <td>{{ $siswa->no_telp }}</td>
                      <td>{{ $siswa->kelaz->nama_kelaz }}</td>
                      <td class="text-right">
                        <form action="/siswa-smansabar/{{ $siswa->id }}" method="post" class="d-inline">
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