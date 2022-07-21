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
                    <th style="width: 12%;">Nama Admin</th>
                    <th style="width: 7%;">NUPTK</th>
                    <th style="width: 7%;">Email</th>
                    <th style="width: 8%;">Nomor Telephone</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($admins as $admin)
                    <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $admin->nama }}</td>
                      <td>{{ $admin->nuptk }}</td>
                      <td>{{ $admin->email }}</td>
                      <td>{{ $admin->no_telp }}</td>
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