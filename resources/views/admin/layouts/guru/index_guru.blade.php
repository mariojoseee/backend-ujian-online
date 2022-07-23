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
              <a href="/guru-smansabar/create" class="btn btn-success">Tambah</a>

              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th style="width: 1%;">No.</th>
                    <th style="width: 17%;">Nama Admin</th>
                    <th style="width: 4%;">NUPTK</th>
                    <th style="width: 5%;">Email</th>
                    <th style="width: 7%;">Nomor HP</th>
                    <th style="width: 7%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($gurus as $guru)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $guru->nama }}</td>
                      <td>{{ $guru->nuptk }}</td>
                      <td>{{ $guru->email }}</td>
                      <td>{{ $guru->no_telp }}</td>
                      <td class="text-right">
                        <form action="/guru-smansabar/{{ $guru->id }}" method="post" class="d-inline">
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