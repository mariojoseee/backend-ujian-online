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

              <form method="post" action="/guru-smansabar">
                @csrf
                <div class="mb-3">
                  <label for="nuptk" class="form-label">Nomor Unik Pendidik dan Tenaga Kependidikan (NUPTK)</label>
                  <input type="number" class="form-control @error('nuptk') is-invalid @enderror" id="nuptk" name="nuptk" autofocus value="{{ old('nuptk') }}"/>
                  @error('nuptk')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="{{ old('password') }}"/>
                  @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">Alamat Email</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" autofocus value="{{ old('email') }}"/>
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>

                <input type="hidden" class="form-control" name="level" value="guru"/>
                <input type="hidden" class="form-control" name="admin_id" value="{{ (Auth::guard('admin')->user()->id) }}"/>

                <button type="submit" class="mt-2 btn btn-primary">Tambah Guru</button>

                <div class="text-right mt-2">
                  <a href="/guru-smansabar"> &larr; Kembali ke data guru</a>
                </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
