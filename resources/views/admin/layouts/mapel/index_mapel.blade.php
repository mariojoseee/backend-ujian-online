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
              <a href="/mapel/create" class="btn btn-success">Tambah</a>

              <table id="datatables" class="table table-bordered table-striped table-sm" style="font-size: 15px;">
                <thead>
                  <tr>
                    <th style="width: 1%;">No.</th>
                    <th style="width: 13%;">Nama Mata Pelajaran</th>
                    <th style="width: 5%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($mapels as $mapel)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $mapel->nama_mapel }}</td>
                      <td class="text-right">
                        <a href="/mapel/{{ $mapel->id }}/edit" class="btn btn-primary btn-sm">Ubah</a>
                        <form action="/mapel/{{ $mapel->id }}" method="post" class="d-inline">
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