<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SMANSA Banjar - Login Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/admin-lte/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/admin-lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin-lte/dist/css/adminlte.min.css">
  <link href="/admin-lte/dist/img/smansabanjar.png" rel="shortcut icon">
</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo mb-4">
      <a href="/admin-lte/index2.html" class="mr-3"><b>SMAN 1 Banjar</b></a>
      <img src="/admin-lte/dist/img/smansabanjar.png" width="110">
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">

        @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
          </div>
        @endif

        <p class="login-box-msg">Website Pengelolaan Data Ujian Online</p>

        <form action="{{ route('postlogin') }}" method="post">
          @csrf
          <div class="input-group mb-3">
            <input type="number" class="form-control @error('nuptk') is-invalid @enderror" placeholder="NUPTK" name="nuptk">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-id-card"></i></span>
            </div>
            @error('nuptk')
              <div class="invalid-feedback">
                Kolom NUPTK harus diisi
              </div>
            @enderror
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" data-toggle="password">
            <div class="input-group-append">
              <span class="input-group-text"><i class="fa fa-eye"></i></span>
            </div>
            @error('password')
              <div class="invalid-feedback">
                Kolom password harus diisi
              </div>
            @enderror
          </div>
          <div class="row">
            {{-- <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  Lihat Password
                </label>
              </div>
            </div> --}}
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Login</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="/admin-lte/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/admin-lte/dist/js/adminlte.min.js"></script>
  {{-- FITUR SEE PASSWORD --}}
  <script src="/bootstrap-show-password/bootstrap-show-password.js"></script>
</body>

</html>
