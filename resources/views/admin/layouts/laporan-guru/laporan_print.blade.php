<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laporan Data Nilai Ujian</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="/admin-lte/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin-lte/dist/css/adminlte.min.css">
  <!-- Trix Editor -->
  <link rel="stylesheet" type="text/css" href="/trix-editor/trix.css">
  <script type="text/javascript" src="/trix-editor/trix.js"></script>
  <link href="/admin-lte/dist/img/smansabanjar.png" rel="shortcut icon">
</head>

<body class="hold-transition sidebar-mini">

  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-cyan">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" data-slide="true" href="#" role="button">
            <p class="text-white">SMAN 1 BANJAR &nbsp;—&nbsp;
              @if (Str::length(Auth::guard('admin')->user()) > 0)
                @if (Str::length(Auth::guard('admin')->user()->nama) > 0)
                  {{ Auth::guard('admin')->user()->nama }}
                @else
                  Lengkapi data diri anda !
                @endif
              @elseif (Str::length(Auth::guard('guru')->user()) > 0)
                @if (Str::length(Auth::guard('guru')->user()->nama) > 0)
                  {{ Auth::guard('guru')->user()->nama }}
                @else
                  Lengkapi data diri anda !
                @endif
              @endif
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="/" class="brand-link text-decoration-none text-center bg-cyan text-white">
        <span class="brand-text text-white">Sistem Ujian Online</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

            @if (Str::length(Auth::guard('admin')->user()) > 0)
              @if (Auth::guard('admin')->user()->level = 'admin')
                <li class="nav-item">
                  <a href="/dashboard-admin" class="nav-link">
                    <i class="fas fa-tachometer-alt nav-icon"></i>
                    <p>Dashboard</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/admin-smansabar" class="nav-link">
                    <i class="fas fa-user nav-icon"></i>
                    <p>Admin</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/guru-smansabar" class="nav-link">
                    <i class="fas fa-chalkboard-teacher nav-icon"></i>
                    <p>Guru</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/siswa-smansabar" class="nav-link">
                    <i class="fas fa-user-graduate nav-icon"></i>
                    <p>Siswa</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/jurusan" class="nav-link">
                    <i class="fas fa-graduation-cap nav-icon"></i>
                    <p>Jurusan</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/angkatan" class="nav-link">
                    <i class="fas fa-calendar-alt nav-icon"></i>
                    <p>Angkatan</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/kelaz" class="nav-link">
                    <i class="fas fa-door-closed nav-icon"></i>
                    <p>Kelas</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/mapel" class="nav-link">
                    <i class="fas fa-book nav-icon"></i>
                    <p>Mata Pelajaran</p>
                  </a>
                </li>
              @endif
            @endif

            @if (Str::length(Auth::guard('guru')->user()) > 0)
              @if (Auth::guard('guru')->user()->level = 'guru')
                <li class="nav-item">
                  <a href="/dashboard-guru" class="nav-link">
                    <i class="fas fa-tachometer-alt nav-icon"></i>
                    <p>Dashboard</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/ujian" class="nav-link">
                    <i class="fas fa-edit nav-icon"></i>
                    <p>Ujian</p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="/laporan" class="nav-link">
                    <i class="fas fa-flag nav-icon"></i>
                    <p>Laporan</p>
                  </a>
                </li>
              @endif
            @endif

            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link">
                <i class="fas fa-sign-out-alt nav-icon"></i>
                <p>Logout</p>
              </a>
            </li>

          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mt-2 mb-2">
            <div class="col-sm-6">
              <h1>{{ $title }}</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <p>
                  <i class="nav-icon fas fa-tachometer-alt"> Dashboard</i> {{ $smallTitle }}
                </p>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12">

              <div class="card">
                <div class="card-body">
                  <h5 class="mt-2">Pengajar : {{ auth('guru')->user()->nama }}</h5>
                  <h5>Mata Pelajaran : {{ $data_ajars->mapel->nama_mapel }} </h5>
                  <h5 class="mb-4">Kelas : {{ $data_ajars->kelaz->nama_kelaz }} ({{ $data_ajars->kelaz->angkatan->tahun }})</h5>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th style="width: 1%;">No.</th>
                        <th style="width: 10%;">Nama Siswa</th>
                        <th style="width: 20%;">Nilai Keseluruhan Ujian</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($siswas as $siswa)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $siswa->nama }}</td>
                          <td>
                            - UTS Semester Ganjil &ensp; = &ensp; @if (isset($siswa->listnilai[0]))
                              {{ $siswa->listnilai[0]->nilai }}
                            @else
                              -
                            @endif <br>
                            - UAS Semester Ganjil &ensp; = &ensp; @if (isset($siswa->listnilai[1]))
                              {{ $siswa->listnilai[1]->nilai }}
                            @else
                              -
                            @endif <br> <br>

                            - UTS Semester Genap &ensp; = &ensp; @if (isset($siswa->listnilai[2]))
                              {{ $siswa->listnilai[2]->nilai }}
                            @else
                              -
                            @endif <br>
                            - UAS Semester Genap &ensp; = &ensp; @if (isset($siswa->listnilai[3]))
                              {{ $siswa->listnilai[3]->nilai }}
                            @else
                              -
                            @endif
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="/admin-lte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables  & Plugins -->
  <script src="/admin-lte/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="/admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <script src="/admin-lte/plugins/jszip/jszip.min.js"></script>
  <script src="/admin-lte/plugins/pdfmake/pdfmake.min.js"></script>
  <script src="/admin-lte/plugins/pdfmake/vfs_fonts.js"></script>
  <script src="/admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
  <script src="/admin-lte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
  <script src="/admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/admin-lte/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/admin-lte/dist/js/demo.js"></script>
  <!-- Page specific script -->
  <script>
    $(function() {
      $("#example1").DataTable({
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        // "buttons": ["excel", "pdf"],
        "searching": false,
        "paging": false,
        "ordering": false,
        "info": false,
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "lengthChange": false,
      });
    });
  </script>
  <script>
    window.print();
  </script>
</body>

</html>
