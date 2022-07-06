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
              <a href="/angkatan/create" class="btn btn-success">Tambah</a>

              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th style="width: 1%;">No.</th>
                    <th style="width: 13%;">Tahun Angkatan</th>
                    <th style="width: 5%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($angkatans as $angkatan)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $angkatan->tahun }}</td>
                      <td class="text-right">
                        <a href="/angkatan/{{ $angkatan->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                        <form action="/angkatan/{{ $angkatan->id }}" method="post" class="d-inline">
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