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
              <a href="/jurusan/create" class="btn btn-success">Tambah</a>

              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th style="width: 1%;">No.</th>
                    <th style="width: 13%;">Nama Jurusan</th>
                    <th style="width: 9%;">Singkatan</th>
                    <th style="width: 7%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($jurusans as $jurusan)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $jurusan->nama_jurusan }}</td>
                      <td>{{ $jurusan->singkatan }}</td>
                      <td class="text-right">
                        <button class="btn btn-primary btn-sm" data-toggle="modal">Edit</button>
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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