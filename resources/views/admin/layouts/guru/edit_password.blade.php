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
            <div class="card-body mr-1">

              <form method="post" action="/update-password-guru">
                @method('put')
                @csrf

                <div class="mb-3">
                  <label for="current_password" class="form-label">Password Saat Ini</label>
                  <div class="input-group">
                    <input type="password" name="current_password" id="current_password" class="form-control @error('current_password') is-invalid @enderror" data-toggle="password">
                    @error('current_password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-eye"></i></span>
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password Baru</label>
                  <div class="input-group">
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" data-toggle="password">
                    @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-eye"></i></span>
                    </div>
                  </div>
                </div>

                <div class="mb-3">
                  <label for="password_confirmation" class="form-label">Konfirmasi Password Baru</label>
                  <div class="input-group">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" data-toggle="password">
                    @error('password_confirmation')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                    @enderror
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-eye"></i></span>
                    </div>
                  </div>
                </div>

                <button type="submit" class="mt-2 btn btn-primary">Ubah Password</button>

                <div class="text-right mt-2 mb-2">
                  <a href="/dashboard-guru"> &larr; Kembali ke dashboard</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
