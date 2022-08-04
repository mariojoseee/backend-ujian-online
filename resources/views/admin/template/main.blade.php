<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.components.head')
  {{-- Menghilangkan tombol upload file pada trix-editor --}}
  <style>
    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">

    @include('admin.components.navbar')

    @include('admin.components.sidebar')

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

      @yield('main-content')

    </div>
    <!-- /.content-wrapper -->

    {{-- @include('admin.components.footer') --}}

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

  </div>
  <!-- ./wrapper -->

  @include('admin.components.script')

  {{-- Sweet Alert RealRashid --}}
  @include('sweetalert::alert')

  {{-- Menghilangkan fungsi upload file pada trix-editor --}}
  <script>
    document.addEventListener('trix-file-accept', function(e){
      e.preventDefault();
    })
  </script>
</body>

{{-- @yield('sweetalert-js') --}}

</html>
