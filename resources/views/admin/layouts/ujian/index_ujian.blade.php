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
                    <th style="width: 1%;">No.</th>
                    <th style="width: 7%;">Jenis Ujian</th>
                    <th style="width: 1%;">Kelas</th>
                    <th style="width: 1%;">Semester</th>
                    <th style="width: 6%;">Mapel</th>
                    <th style="width: 8%;">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($ujians as $ujian)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $ujian->jenis }}</td>
                      <td>{{ $ujian->kelas }}</td>
                      <td>{{ $ujian->semester }}</td>
                      <td>{{ $ujian->mapel->nama_mapel }}</td>
                      <td class="text-right">
                        <a href="#" class="btn btn-warning btn-sm">Nonaktif</a>
                        <a href="/ujian/{{ $ujian->id }}" class="btn btn-info btn-sm">Soal</a>
                        <a href="/ujian/{{ $ujian->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
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